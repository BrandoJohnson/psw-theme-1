<?php

/*
Template Name: Consult Form
*/

get_header(); ?>
    <div id="main-content">
        <div class="container">
            <div class="row">
                <section class="section span12">
                    <div class="section-headlines text-center signform span8">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                           <div class="text-left"><h2><?php the_title(); ?></h2>
                            <h4>Tell us about your organization and we will answer any questions you may have.</h4>
                            <p><?php the_content(); ?></p></div>

                        <?php endwhile; else: ?>
                            <p><?php _e('Sorry, this page does not exist.'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="span2">
                        <?php get_sidebar(consult); ?>
                    </div>
                </section>
            </div>
        </div>
    </div>

<?php get_footer(); ?>