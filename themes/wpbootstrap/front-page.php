
<?php

/*
Template Name: Homepage
*/

get_header(); ?>

<header id="heading">
    <div class="container text-center">
        <h1>Public Service Websites</h1>
        <h4>Website Design for Charities, Campaigns, Police stations, Fire Stations and Organizations Done for you, in <i>one week.</i></h4>

        <p><a href="<?php get_site_url(); ?>/free-consultation/" class="btn btn-large btn-warning">Get a Free Consultation</a></p>

    </div>
</header>

<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="span4">
                <span class="glyphicon glyphicon-send" aria-hidden="true">
                <h2><span class="glyphicon glyphicon-send" aria-hidden="true"></span>Send What you Have</h2>
                <h4><?php the_field('left_feature_block'); ?></h4>
            </div>

            <div class="span4">
                <h2><span class="glyphicon glyphicon-search" aria-hidden="true"></span>Done for you...</h2>
                <h4><?php the_field('middle_feature_block'); ?></h4>
            </div>

            <div class="span4">
                <h2><span class="glyphicon glyphicon-search" aria-hidden="true"></span>Go Live!</h2>
                <h4><?php the_field('right_feature_block'); ?></h4>
            </div>
        </div><!-- @end .row -->

        <div class="row-fluid"><hr/>
            <ul class="thumbnails homeblock">
                <li class="span6">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/img/macbook.png" alt="dribbble shots super nintendo">
                </li>
                <li class="span6">
                    <h2><?php the_field('right_middle_text_field_title'); ?></i></h2>
                    <h4><?php the_field('right_middle_text_field'); ?></h4>
                </li>
                <li class="span3"><?php the_field('right_middle_bottom_text_field'); ?></li>
                <li class="span3"><?php the_field('right_middle_bottom_text_field2'); ?><a href="<?php get_site_url(); ?>/free-consultation/" class="btn btn-warning">Free Consultation</a></li>
            </ul>
        </div>

        <hr>

        <h2>See Some Examples</h2>
        <div class="alert alert-info">
            <strong>Note:</strong> Click on a theme to view a demo.
        </div>

        <div class="row-fluid">
            <ul class="thumbnails">
                <li class="span4">
                    <a href="#" class="thumbnail" target="_blank">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/img/public_service_websites.png" alt="public service websites">
                    </a>
                </li>
                <li class="span4">
                    <a href="#" class="thumbnail" target="_blank">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/img/twotouches.png" alt="police department websites">
                    </a>
                </li>
                <li class="span4">
                    <a href="#" class="thumbnail" target="_blank">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/img/police_department_websites.png" alt="Charity Websites">
                    </a>
                </li>
            </ul>
        </div><!-- @end .row-fluid -->
        <hr>
    </div><!-- @end .container -->
</div><!-- @end #main-content -->




<?php get_footer(); ?>