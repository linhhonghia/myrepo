
<?php get_header(); ?>


<!-- <?php the_post_thumbnail(); ?> -->


<body class= "page <?php echo get_post_meta(get_the_ID(),'page_class',true);?>">
	<div class="c-wrapper">
		<div id="page" class="hfeed site">

			<section id="content" class="site-content">

				<section class="c-page-header">

					<div class="header-parralax" data-image="<?php echo the_post_thumbnail_url(); ?>">

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
	</div><!-- 
				<section class="c-page-content">
				<div id="primary" class="content-area">
					<main id="main" class="site-main main-content">
						<div class="c-entry-main">
							<article>
								<div class="entry-content">
 -->

									<!-- <section id="c-projects-3" class="c-projects grid style-3">
										<div class="c-projects__inner">
											<div class="container-fluid">
												<div class="row">

													<div class="col-xs-12 c-column no-gutter">
														<div class="block-group" data-aos="fade-up" data-aos-delay="200">
															
															
															
															<div class="block">

																<div class="item-title">
																	<img src="images/members/phuongnt_hover.jpg"/>
																</div>
																<div class="item-title"></div>
																<div class="item-content">
																	<figure class="item-grid">
																		<img src="images/members/phuongnt.jpg"/>
																	</figure>
																</div>



															</div>
														</div>
													</div>

												</div>
											</div>
										</div>
									</section>
 -->



	<!-- <?php echo wp_get_attachment_url(296); ?> -->
 
<?php if( have_posts() ): while (have_posts()) : the_post(); ?>


<!-- <?php  echo get_post_meta( get_the_ID(),'page_sub_title', true );
?> -->

	<?php the_content(); ?>


<?php endwhile; ?>
<?php endif; ?>	 

<!-- 
									</div>

							</article>
						</div>
					</main>
				</div>
			</section> -->

<?php get_footer(); ?>