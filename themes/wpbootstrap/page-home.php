
<?php

/*
Template Name: Homepage
*/

get_header(); ?>

<header id="heading">
    <div class="container text-center">
        <h1>Public Service Websites</h1>
        <h4>Website Design for Charities, campaigns and police stations.</h4>

        <p><a href="index.html" class="btn btn-large btn-inverse">Check out our features</a></p>
    </div>
</header>

<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="span4">
                <h2>Our Products</h2>
                <p><?php the_field('left_feature_block'); ?></p>
                <p class="text-center"><a class="btn" href="index.html">Read more</a></p>
            </div>

            <div class="span4">
                <h2>We Love You! <small>so much</small></h2>
                <p><?php the_field('middle_feature_block'); ?></p>
                <p class="text-center"><a class="btn btn-primary" href="index.html">Primary button</a></p>
            </div>

            <div class="span4">
                <h2>Headline Here</h2>
                <p><?php the_field('right_feature_block'); ?></p>
                <p class="text-center"><a class="btn" href="index.html">Read more</a></p>
            </div>
        </div><!-- @end .row -->

        <hr>

        <h2>See Some of our Themes</h2>
        <div class="alert alert-info">
            <strong>Note:</strong> Click on a theme to view a demo.
        </div>

        <div class="row-fluid">
            <ul class="thumbnails">
                <li class="span4">
                    <a href="#" class="thumbnail" target="_blank">
                        <img src="http://i.imgur.com/Q4bxBmd.png" alt="snes controller dribbble shot">
                    </a>
                </li>
                <li class="span4">
                    <a href="#" class="thumbnail" target="_blank">
                        <img src="http://i.imgur.com/uQLkghZ.png" alt="minicon series2 snes console">
                    </a>
                </li>
                <li class="span4">
                    <a href="#" class="thumbnail" target="_blank">
                        <img src="http://i.imgur.com/vLg6MDV.png" alt="snes video game cartridge shot">
                    </a>
                </li>
            </ul>
        </div><!-- @end .row-fluid -->

        <div class="row-fluid">
            <ul class="thumbnails">
                <li class="span6">
                    <a href="#" class="thumbnail" target="_blank">
                        <img src="http://i.imgur.com/SS8Kiln.png" alt="dribbble shots super nintendo">
                    </a>
                </li>
                <li class="span6">
                    <a href="#" class="thumbnail" target="_blank">
                        <img src="http://i.imgur.com/y3M2d7p.png" align="dribbble console wars super nintendo design">
                    </a>
                </li>
            </ul>
        </div><!-- @end .row-fluid -->

        <hr>
    </div><!-- @end .container -->
</div><!-- @end #main-content -->




<?php get_footer(); ?>