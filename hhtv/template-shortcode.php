<?php

class hhtv_shortcode_template {

	public static function hhtv_listing_template(){	

	$args = array( 'post_type' => 'jobs', 'posts_per_page' => -1 );
	$loop = new WP_Query( $args );
	$post = $loop->posts;
	$number_post = $loop->found_posts;

	?>
		<section class="section c-welcome">
			<div class="c-welcome__inner">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 c-column">
							<div class="block" data-aos="fade-up" data-aos-delay="100">
								<h2><span class="special"><?php  echo get_post_meta( get_the_ID(),'page_quote', true ); ?></span></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="c-content-block-1" class="section c-content-block">
		<div class="container">
	<?php

		for($i = 1 ;$i <= $number_post + 1 ; $i++){

			if($i == 1 || $i%2 !=0){ 
				if(isset($post[$i-1])){
			 ?>
					<div class="row">
						<div class="col-xs-12 col-md-6 c-column">
							<div class="block" data-aos="fade-up" data-aos-delay="300">
								<a href="<?php echo $post[$i-1]->guid; ?>" target="_blank">
									<h3><?php echo $post[$i-1]->post_title; ?></h3>
								</a>
								<p><?php echo $post[$i-1]->post_excerpt; ?></p>
								<a href="<?php echo $post[$i-1]->guid; ?>" target="_blank">Read More</a>
							</div>
						</div>
				<?php
				}
				
			} if($i%2 == 0){

				if(isset($post[$i-1])){  ?>

					<div class="col-xs-12 col-md-6 c-column">
							<div class="block" data-aos="fade-up" data-aos-delay="300">
								<a href="<?php echo $post[$i-1]->guid; ?>" target="_blank">
									<h3><?php echo $post[$i-1]->post_title; ?></h3>
								</a>
								<p><?php echo $post[$i-1]->post_excerpt; ?></p>
								<a href="<?php echo $post[$i-1]->guid; ?>" target="_blank">Read More</a>
							</div>
						</div>

					</div> <!-- End div row -->
					<?php
				} else { ?> </div> <!-- End div row --> <?php }	
			}
		} ?>

			</div>
		</section>

	<?php }

	public static function hhtv_header_template($arr){	
		// var_dump($arr['title']);
		$str_old = explode(' ',$arr['title']);
		for($i=0; $i < count($str_old); $i++){

			$str[$i] ="<span class= special >".ucfirst(substr($str_old[$i], 0,1))."</span>".substr($str_old[$i],1);
		}
		$str_new = implode(' ', $str);

		?>
			<section class="c-welcome">
				<div class="c-welcome__inner">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 c-column">
								<div class="block" data-aos="fade-up" data-aos-offset="200">
									<h1><?php echo $str_new; ?></h1>

									<p><?php echo $arr['des']; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		<?php

	}


	public static function hhtv_services_template($arr){

	?>



				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="block" data-aos="fade" data-aos-delay="100" data-aos-offset="50px">
						<i class="fa fa-phone"></i>

						<div class="item-title">
							<h6>Web Design</h6>
						</div>
						<div class="item-summary">
							<p>We have an in-house team of professional designers who have crafted hundreds of sites, used by thousands customers</p>
						</div>
						<div class="call-to-action">
							<a href="contact.html">Contact Us</a>
						</div>
					</div>
				</div>




		<?php
	}




	public static function hhtv_product_template($arr){


	$content_post = get_post($arr['id']);

	if(!isset($content_post)) {
		return;
	} else	
	$style = ($arr['style'] == '1') ? "even" : "odd";	
 	$title = $content_post->post_title;
	$content = $content_post->post_content;
	$link = $content_post->post_excerpt;
	$color = get_post_meta( $arr['id'],'_background', true ); 
	$background =($color != null) ? $color : 'white'; 

	if($arr['style'] == '1'){

		?>

		<section id="c-content-block-2" class="c-content-block style-2 <?php echo $style; ?>">
				<div class="c-content-block__inner">
					<div class="container">
						<div class="row">
							<div class="block-group">

								<div class="col-xs-12 col-md-6 no-gutter c-column">
									<div class="block block-left box pull-left">

										<div class="item-content cactus">
											<div class="item-title" style =" background :<?php echo $background; ?> ">
												<img src="	<?php echo get_the_post_thumbnail_url($arr['id']); ?>" alt="<?php echo $title; ?>"/>
											</div>
										</div>

									</div>	
								</div>


								<div class="col-xs-12 col-md-6 no-gutter c-column">
									<div class="block block-right pull-right">

										<div class="item-content">
											<h1 class="headline"><?php echo $title; ?></h1>

											<p><?php echo $content ?></p>
											<a href="https://<?php echo $link; ?>" target="_blank">
												<h5 class="headline"><?php echo $link; ?></h5>
											</a>
										</div>
									</div>
								</div>


						</div>
					</div>
				</div>
			</div>
		</section>
	<?php	

	} 	if($arr['style'] != '1'){
		?>
			<section id="c-content-block-2" class="c-content-block style-2 <?php echo $style; ?>">
					<div class="c-content-block__inner">
						<div class="container">
							<div class="row">
								<div class="block-group">

									<div class="col-xs-12 col-md-6 no-gutter c-column">
										<div class="block block-right pull-right">

											<div class="item-content">
												<h1 class="headline"><?php echo $title; ?></h1>

												<p><?php echo $content ?></p>
												<a href="https://<?php echo $link; ?>" target="_blank">
													<h5 class="headline"><?php echo $link; ?></h5>
												</a>
											</div>
										</div>
									</div>

									<div class="col-xs-12 col-md-6 no-gutter c-column">
										<div class="block block-left box pull-left">

											<div class="item-content cactus">
												<div class="item-title" style =" background :<?php echo $background; ?> ">
													<img src="	<?php echo get_the_post_thumbnail_url($arr['id']); ?>" alt="<?php echo $title; ?>"/>
												</div>
											</div>

										</div>	
									</div>

							</div>
						</div>
					</div>
				</div>
			</section>


			<?php
		}
		
		/*	?>
		<?php*/
	}	


	public static function hhtv_member_template($arr){
		// var_dump($arr);

		?>

			<section id="c-projects-3" class="c-projects grid style-3">
				<div class="c-projects__inner">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 c-column no-gutter">
								<div class="block-group" data-aos="fade-up" data-aos-delay="200">												
									<div class="block">

										<div class="item-title">
											<img src="<?php echo wp_get_attachment_url($arr['id2']); ?>"/>
										</div>
										<div class="item-title"></div>
										<div class="item-content">
											<figure class="item-grid">
												<img src="<?php echo wp_get_attachment_url($arr['id1']); ?>"/>
											</figure>
										</div>


									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>


		<?php
	}

}
	
		
	
	
