<?php 
/*
Template Name: TEMPLATE TEST
*/
?>

<?php get_header(); ?>

<section class="c-welcome">
										<div class="c-welcome__inner">
											<div class="container">
												<div class="row">
													<div class="col-xs-12 c-column">
														<div class="block" data-aos="fade-up" data-aos-offset="200">
															<h1><span class="special">G</span>reat <span class="special">Q</span>uality <span class="special">F</span>rom <span class="special">S</span>mall <span class="special">T</span>hings</h1>

															<p>Contact us if you have any idea in mind. We turn it into reality.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>



									</br>
									</br>
									</br>
									</br>
									</br>
									</br>


<?php while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        
            <!-- <?php the_content();  ?> <!-- Page Content --> -->
      <!-- .entry-content-page -->

    <?php
    endwhile; //re


?>


<?php get_footer(); ?>


