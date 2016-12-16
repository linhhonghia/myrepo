
<?php get_header(); ?>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<body class="page blog career">

	<div class="c-wrapper">
		<div id="page" class="hfeed site">

			<section id="content" class="site-content">

				<section class="c-page-header">

					<div class="header-parralax" data-image="<?php echo HHTV_THEME_URI ?>/images/career-header.jpg">

						<div class="mask"></div>
						<div class="c-page-header__inner">
							<div class="container">
								<div class="row">
									<div class="col-xs-12 c-column">
										<div class="block">
											<div class="c-title">
												<div class="item-title">
													<h2><?php the_title(); ?></h2>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

				</section>

			</section>

		</div>
	</div>

<h2> ----ARCHIVE-JOBS.PHP </h2>

<!-- <h3><?php echo ot_get_option('archive_career_heading');?></h3> -->

 <?php
  

  $args = array( 'post_type' => 'jobs', 'posts_per_page' => -1 );
	$loop = new WP_Query( $args );
	// $html .= '';
	while ( $loop->have_posts() ) : $loop->the_post();


  the_title();
  echo '<div class="entry-content">';
  the_content();
  echo '</div>';
endwhile;
    ?>
<!-- <pre>
<?php print_r($post); ?>
</pre> -->





<!-- 
<section id="content" class="site-content">

			<section class="c-page-header">

				<div class="header-parralax" data-image="images/about-header.jpg">

					<div class="mask"></div>
					<div class="c-page-header__inner">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 c-column">
									<div class="block">
										<div class="c-title">
											<div class="item-title">
												<h2><?php echo strtoupper($post->post_title); ?></h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</section>
 -->
	


<!-- <?php if( have_posts() ): while (have_posts()) : the_post(); ?>
<?php the_content(); ?>

<?php endwhile ?>
<?php endif; ?>	 -->

<?php get_footer(); ?>