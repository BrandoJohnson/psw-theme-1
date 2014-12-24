<?php

/*
Template Name: Sign-Up Form
*/

get_header(); ?>


<div id="main-content">
    <div id="topside" align="left" class="row">
        <h2>
            <div class="selected span12"><span class="selectedon">Choose Your Plan ></span> Pick Your Username > Create Your Site
            </div>
        </h2>
    </div>
    <div class="container">
        <div class="row">
                <div class="section-headlines signform span8">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="text-left"><h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        </div>

                    <?php endwhile; else: ?>
                        <p><?php _e('Sorry, this page does not exist.'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="span4">
                    <?php get_sidebar(signup); ?>
                </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>