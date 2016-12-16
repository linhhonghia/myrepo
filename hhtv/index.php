
<?php get_header(); ?>

<!-- <?php the_post_thumbnail(); ?> -->




 <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        
    
    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
<!-- <pre>
<?php print_r($post); ?>
</pre> -->

	<?php if(have_posts()) : while (have_posts() ) : the_post(); ?>

<h1><?php echo the_title(); ?></h1>

<?php endwhile; ?>
<?php endif; ?>	 



<!-- <h2> INDEX.PHP </h2>
 -->


<!-- <?php if( have_posts() ): while (have_posts()) : the_post(); ?>
<?php the_content(); ?>

<?php endwhile ?>
<?php endif; ?>	 -->

<?php get_footer(); ?>