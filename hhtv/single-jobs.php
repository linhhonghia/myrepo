
<?php get_header(); ?>
<?php   while ( have_posts() ) : the_post(); ?> 


<body class="page blog career">

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
													<h2><?php echo get_post_meta( get_the_ID(), '_title_header', true );  ?></h2>
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


<div class="c-wrapper">
	<div id="page" class="hfeed site">

		<!--!site-header-->

		<section id="content" class="site-content">

			<section class="c-page-header">
				
			</section>

			<section class="c-page-content">
				<div id="primary" class="content-area">
					<main id="main" class="site-main main-content">

						<div class="c-entry-main">

							<article>

								<div class="entry-content">

									<section class="section c-welcome">
										<div class="c-welcome__inner">
											<div class="container">
												<div class="row">
													<div class="col-xs-12 c-column">
														<div class="block" data-aos="fade-up" data-aos-delay="100">
															<h2><span class="special"><?php echo get_post_meta( get_the_ID(), '_des_jobs', true ); ?></span></h2>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<!--!welcome-->

									<section class="section">
										<div class="container">
											<div class="row">
												<div class="col-xs-12 col-md-12 c-column">
													<div class="block" data-aos="fade-up" data-aos-delay="300">
														<h1 style="padding-bottom: 30px;"><?php the_title(); ?></h1>
														<?php the_content(); ?>

													</div>
												</div>
											</div>
										</div>
									</section>

								</div>

							</article>
						</div>
					</main>
				</div>
			</section>
			<!--!c-page-content-->

		</section>
		<!--!site-content-->

	</div>
</div>

 <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>



<!-- <?php if( have_posts() ): while (have_posts()) : the_post(); ?>
<?php the_content(); ?>

<?php endwhile ?>
<?php endif; ?>	 -->

<?php get_footer(); ?>