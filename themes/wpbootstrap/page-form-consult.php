<?php

/*
Template Name: Consult Form
*/

get_header(); ?>

    <section class="section row">
        <div class="section-headlines text-center span8 signform">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <div class="span8 text-left"><h2><?php the_title(); ?></h2>
                <h4>Tell us about your organization and we will answer any questions you may have.</h4>
                <p><?php the_content(); ?></p></div>

            <?php endwhile; else: ?>
                <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>
        </div>
        <div class="span4">
            <?php get_sidebar(consult); ?>
        </div>
    </section>

<?php get_footer(); ?>