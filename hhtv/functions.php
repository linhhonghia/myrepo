<?php


require_once('template-shortcode.php');

require get_template_directory() . '/widgets/contact.php';

define ('HHTV_THEME_URI',get_template_directory_uri());

// Theme setup

if(!function_exists('hhtv_theme_setup')){

	function hhtv_theme_setup(){

		/*Add Menu*/
		register_nav_menu ( 'primary-menu',__('Primary Menu','cactus'));

		/* Add sidebar */

		$sidebar = array(
		   'name' => __('Footer Sidebar', 'cactus'),
		   'id' => 'footer-sidebar',
		   'description' => 'Footer sidebar for HHTV theme',
		   'class' => 'footer-sidebar',
		   'before_widget' => '<div class="widget">',
		   'after_widget'  => '</div>',

		);
		register_sidebar( $sidebar );

		add_theme_support( 'post-thumbnails' );


 
           
	}
	add_action('init','hhtv_theme_setup');
}


// TEMPLATE FUNCTION

if(!function_exists('hhtv_header')){ 

	function hhtv_header(){ ?>
		<div class="site-name">
			<?php 
			printf(
			    '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
			    get_bloginfo( 'url' ),
			    get_bloginfo( 'description' ),
			    get_bloginfo( 'sitename' )
		 	); 
		 	?>
		 </div>	<?php

	}	 	
}

// MENU

if( !function_exists('hhtv_menu')) {

	function hhtv_menu($menu_) {
		
		$menu = array(
	      'theme_location' =>$menu_,
	      'container' => 'nav',
	      'container_class' =>'navbar navbar-inverse main-menu',
	      'container_id' => 'site-navigation'
   		);

    wp_nav_menu( $menu );
		
	}
}
if(!function_exists('hhtv_styles'))  {
	function hhtv_styles() {

		wp_enqueue_style('hhtv-bootstrap',HHTV_THEME_URI.'/css/bootstrap.min.css');
		wp_enqueue_style('hhtv-ionicons',HHTV_THEME_URI.'/css/fonts/ionicons/css/ionicons.min.css');
		wp_enqueue_style('hhtv-slick-theme',HHTV_THEME_URI.'/css/slick-theme.css');
		wp_enqueue_style('hhtv-slick',HHTV_THEME_URI.'/css/slick.css');
		wp_enqueue_style('hhtv-font-fa',HHTV_THEME_URI.'/css/fonts/awesome/css/font-awesome.min.css');
		wp_enqueue_style('hhtv-aos',HHTV_THEME_URI.'/css/aos.css',array(), false, 'all');
		wp_enqueue_style('hhtv-main-style', HHTV_THEME_URI.'/style.css',array(), false, 'all' );

		wp_enqueue_script( 'hhtv-bootstrap', HHTV_THEME_URI.'/js/bootstrap.min.js', array('jquery'));
		wp_enqueue_script( 'hhtv-less', HHTV_THEME_URI.'/js/less.min.js');	
		wp_enqueue_script( 'hhtv-slick', HHTV_THEME_URI.'/js/slick.min.js');	
		wp_enqueue_script( 'hhtv-progressbar', HHTV_THEME_URI.'/js/progressbar.min.js');
		wp_enqueue_script( 'hhtv-imageScroll', HHTV_THEME_URI.'/js/jquery.imageScroll.min.js');
		wp_enqueue_script( 'hhtv-aos', HHTV_THEME_URI.'/js/aos.js');
		wp_enqueue_script( 'hhtv-imagesloaded', HHTV_THEME_URI.'/js/imagesloaded.pkgd.min.js');
		wp_enqueue_script( 'hhtv-masonry', HHTV_THEME_URI.'/js/masonry.pkgd.min.js');
		wp_enqueue_script( 'hhtv-SmoothScroll', HHTV_THEME_URI.'/js/SmoothScroll.js');
		wp_enqueue_script( 'hhtv-scripts', HHTV_THEME_URI.'/js/scripts.js', array('jquery'));
		
	
	}

}

add_action( 'wp_enqueue_scripts', 'hhtv_styles' );

// REGISTER POST JOBS

if(!function_exists('hhtv_post_jobs')) {
	function hhtv_post_jobs(){
		$labels = array(
			'name' => 'Post Jobs',
			'singular_name' => 'jobs',
			'add_new' => 'Add new Jobs',
			'all_items' => 'All Jobs',
			'add_new_item' => 'Add Jobs',
			'edit_item' => 'Edit Jobs',
			'view_item' => 'View Item',
			'search_item'=> 'Search Jobs',
			'not_found' => 'No items found',
			'not_found_in_trash' => 'No items found in trash',
			'parent_item_colon' => 'Parent Item'
		);

		$args = array(
			'labels'=> $labels,
			'public'=>true,
			'has_archive'=> true,
			'publicly_queryable'=> true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical'=>false,
			'supports'=> array(
				'title','editor','thumbnail','custom-fields','excerpt'

			),
			// 'taxonomies'=> array('category','post_tag'),
			'menu_position'=>5,
			'exclude_from_search'=>false,
		);

		
		register_post_type('jobs',$args);

	}
}	
	add_action('init','hhtv_post_jobs');


	function hhtv_meta_box_jobs(){

		 add_meta_box( 'job_des', 'Job Details ', 'hhtv_metabox_jobs', 'jobs' );
		 add_meta_box( 'post_bgr', 'Background settings', 'hhtv_metabox_services', 'post' );

		}
	add_action( 'add_meta_boxes', 'hhtv_meta_box_jobs' );


	function hhtv_metabox_services(){

	$background = get_post_meta( get_the_ID(), '_background', true ) ;
	
		echo ( '<label> Color Background </label></br>' );
		echo ('<input  type="text" id="background" name="background" value="'.$background.'" /></br>');


	}



	function hhtv_metabox_jobs(){	

		$des_jobs = get_post_meta( get_the_ID(), '_des_jobs', true ) ;
		$title_header = get_post_meta( get_the_ID(), '_title_header', true );


		echo ( '<label> Title Header </label></br>' );
	 	echo ('<input  type="text" id="title_header" name="title_header" value="'. $title_header .'" /></br>');

	    echo ( '<label> Quote </label></br>' );
	 	echo ('<input  class="widefat" type="text" id="des_jobs" name="des_jobs" value="'. $des_jobs .'" /></br>');


	 	?>


	 	<?php
	}

	function hhtv_metabox_save( $post_id ){


		 $background = sanitize_text_field( $_POST['background'] ) ;
		 $des_jobs =  sanitize_text_field( $_POST['des_jobs'] ) ;
		 $title_header = sanitize_text_field( $_POST['title_header'] ) ;

		 update_post_meta( $post_id, '_background', $background );
		 update_post_meta( $post_id, '_des_jobs', $des_jobs );
		 update_post_meta( $post_id, '_title_header', $title_header );



	 	 
	}
	add_action( 'save_post', 'hhtv_metabox_save' );


	function hhtv_listing_jobs() {

	// $args = array( 'post_type' => 'jobs', 'posts_per_page' => -1 );
	// $loop = new WP_Query( $args );
	// $html ='';
	// while ( $loop->have_posts() ) : $loop->the_post();
	// $html .= '<a href="'.get_permalink().'">'.get_the_title().'</a>';
	
	// endwhile;

	// return  $html;
	

	return hhtv_shortcode_template::hhtv_listing_template();

	}
	add_shortcode( 'hhtv_jobs', 'hhtv_listing_jobs' );



 	/*Page Metabox*/
	add_action('admin_init', 'hhtv_page_meta_boxes');
	if (!function_exists('hhtv_page_meta_boxes')) {
		function hhtv_page_meta_boxes()
		{
			$page_meta_boxes = array(
	          'id'       => 'page_meta_box',
	          'title'    => esc_html__('Settings', 'cactus'),
	          'desc'     => '',
	          'pages'    => array('page', 'career'),
	          'context'  => 'normal',
	          'priority' => 'high',
	          'fields'   => array(
	              array(
	                  'label' => esc_html__('Page Settings', 'cactus'),
	                  'id'    => 'page_settings_tab',
	                  'type'  => 'tab'
	              ),
	              array(
	                  'id'        => 'page_quote',
	                  'label'     => esc_html__('Page Quote', 'cactus'),
	                  'desc'      => esc_html__('Enter Page Quote', 'cactus'),
	                  'std'       => '',
	                  'type'      => 'text'
	              )
	           )
	        );

	        ot_register_meta_box($page_meta_boxes);
		}
	}

	 function hhtv_text_header( $atts ) {

	    $arr  = shortcode_atts( array(

	        'title' => 'title title',
	        'des' => 'description description',
	    ), $atts );

	    return hhtv_shortcode_template::hhtv_header_template($arr);
	}
	add_shortcode( 'hhtv_header', 'hhtv_text_header' );



	function hhtv_product_shortcode($atts) {

		$arr  = shortcode_atts( array(

	        'id' => '76',
	        'style' => '1',
	    ), $atts );


	  return hhtv_shortcode_template::hhtv_product_template($arr);

	}
	add_shortcode( 'hhtv_product', 'hhtv_product_shortcode' );


// create a styled button
function ContactButton($atts=[], $content = null) {
	// extract(shortcode_atts(array(
	// 	'url' => '/contact-us',
	// 	'type' => 'style1'
	// ), $params));
	 $content = do_shortcode($content);
 
	return 

	 '<section id="c-icon-box-1" class="section c-icon-box style-2">
										<div class="container">
											<div class="row">
												<div class="c-icon-box__inner">
													<div class="block-group">'.$content.'
							</div>
						</div>
					</div>
				</section>';
		// '<a href="' . $url . '" class="button ' . $type. '">' . ucwords($content) . '</a>';

}
add_shortcode('button','ContactButton');



// add_shortcode( 'hhtv_service', 'hhtv_services' );

function hhtv_services_shortcode( $atts ) {

    $arr  = shortcode_atts( array(

        'id1' => 'Services',
        'id2' => 'We have an in-house team of',
    ), $atts );

    return hhtv_shortcode_template::hhtv_services_template($arr);
}
add_shortcode( 'hhtv_service', 'hhtv_services_shortcode' );



function ContactButton2($atts=[], $content = null) {

	// extract(shortcode_atts(array(
	// 	'url' => '/contact-us',
	// 	'type' => 'style1'
	// ), $params));
	 $content = do_shortcode($content);
 
	return 
		'<section class="c-page-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main main-content">
					<div class="c-entry-main">
						<article>
							<div class="entry-content">'
								.$content.'
							</div>
						</article>
					</div>
				</main>
			</div>
		</section>';


}
add_shortcode('row','ContactButton2');

function hhtv_member_shortcode($atts) {

  $arr  = shortcode_atts( array(

        'id1' => '295',
        'id2' => '296',
    ), $atts );


    return hhtv_shortcode_template::hhtv_member_template($arr);
}
add_shortcode( 'hhtv_member', 'hhtv_member_shortcode' );





// function hhtv_row_start() {

   // $html = '<section id="c-icon-box-1" class="section c-icon-box style-2">
			// 							<div class="container">
			// 								<div class="row">
			// 									<div class="c-icon-box__inner">
			// 										<div class="block-group">';

//     return $html;
// }
// add_shortcode( 'start', 'hhtv_row_start' );


// function hhtv_row_end() {
// $html ='</div>
// 			</div>
// 		</div>
// 	</div>
// </section>';

//     return $html;
// }
// add_shortcode( 'end', 'hhtv_row_end' );

