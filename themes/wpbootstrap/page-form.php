<?php

/*
Template Name: Form
*/

get_header(); ?>

<section class="section">
    <div class="section-headlines text-center">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>

        <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>