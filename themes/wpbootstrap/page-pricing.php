<?php

/*
Template Name: Pricing
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

        <div class="row-fluid">
            <div class="pricing-table row-fluid text-center">
                <div class="span4">
                    <div class="plan">
                        <div class="plan-name">
                            <h2>One-Time Setup Fee</h2>
                            <p class="muted">Your new site and domain name will be live quickly. <br/>We do everything for you.</p>
                        </div>
                        <div class="plan-price plan-setup">
                            <b>$249</b>
                        </div>
                        <div class="plan-details">
                            <div>
                                <b>Design Customization</b>
                            </div>
                            <div>
                                <b>Input of all Menus and Content</b>
                            </div>
                            <div>
                                <b>Activate your Domain Name</b>
                            </div>
                            <div>
                                <b>Connect your Social Media Profiles</b>
                            </div>
                            <div style="height: 3.4em;">
                                <b>Go Live on One Week!</b>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="span4">
                    <div class="plan prefered">
                        <div class="plan-name">
                            <h2>Service Plan</h2>
                            <p class="muted">The Service Plan Begins after initial setup. <br/>It covers web updates, hosting and support.</p>
                        </div>
                        <div class="plan-price">
                            <b>+$59</b> / month
                        </div>
                        <div class="plan-details">
                            <div>
                                First Month is <b>Free</b>
                            </div>
                            <div>
                                <b>Reliable Hosting</b>
                            </div>
                            <div>
                                <b>24/7 Support</b>
                            </div>
                            <div>
                                <b>Content and Web Updates</b>
                            </div>
                        </div>
                        <div class="plan-action">
                            <a href="#" class="btn btn-success btn-block btn-large">Choose Plan</a>
                        </div>
                    </div>
                </div>

                <div class="span4">
                    <div class="plan">
                        <div class="plan-name">
                            <h2>Service + Marketing Plan</h2>
                            <p class="muted">Boost your reach with an email marketing campaign - With all of the benefits of the Service Plan, with Email Marketing.</p>
                        </div>
                        <div class="plan-price">
                            <b>+$99</b> / month
                        </div>
                        <div class="plan-details">
                            <div>
                                First Month is <b>Free</b>
                            </div>
                            <div>
                                <b>Monthly Email Newsletter</b>
                            </div>
                            <div>
                                <b>Up to 2,000 Subscribers</b>
                            </div>
                            <div><b>Includes all the Benefits of the Service Plan</b></div>
                        </div>
                        <div class="plan-action">
                            <a href="#" class="btn btn-block btn-large">Choose Plan</a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="muted text-center">Note: You can change or cancel your plan at anytime in your account settings.</p>
        </div>
    </section>

<?php get_footer(); ?>