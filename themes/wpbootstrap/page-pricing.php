<?php

/*
Template Name: Pricing
*/

get_header(); ?>

    <section class="section sectione">
        <div class="section-headlines text-center">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>

            <?php endwhile; else: ?>
                <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>
        </div>
        <div class="main-content">
            <div class="container row-fluid">
                <div class="pricing-table row-fluid text-center">
                    <div class="span4 ">
                        <div class="plan">
                            <div class="plan-name">
                                <h2>Website Setup</h2>
                                <p class="muted">After you provide us with your logo, pages, images and content, your new site and domain name will be live quickly. <br/><strong>We do everything for you.</strong> You will be able to preview your site before it is made live.</p>
                            </div>
                            <div class="plan-price">
                                <b>$249</b>
                            </div>
                            <div class="plan-details">
                                <div>
                                    <b>✔ &nbsp; Input of all Menus and Content</b>
                                </div>
                                <div>
                                    <b>✔ &nbsp; Wordpress Website</b>
                                </div>
                                <div>
                                    <b>✔ &nbsp; Reliable Hosting & Domain Name Activation</b>
                                </div>
                                <div>
                                    <b>✔ &nbsp; Go Live!</b>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="plan prefered">
                            <div class="plan-name">
                                <h2>Service Plan + Content</h2>
                                <h4><b>First Month is</b> Free</h4>
                                <p class="muted">Get the most out of your site and have your content managed by our web professionals.</p>
                            </div>
                            <div class="plan-price">
                                <b>+$79</b> / month
                            </div>
                            <div class="plan-details">
                                <div>
                                    <b>Includes Service Plan</b>
                                </div>
                                <div>
                                    <b>Done-for-you Web Content Updates</b>
                                </div>
                                <div>
                                    <b>Wordpress Updates & Backups</b>
                                </div>
                                <div>
                                    <b>Security Updates</b>
                                </div>
                            </div>
                            <div class="plan-action">
                                <a href="<?php get_site_url(); ?>/sign-up-3/" class="btn btn-success btn-block btn-large">Choose Plan</a>
                            </div>
                        </div>
                    </div>

                    <div class="span4">

                        <div class="plan">
                            <div class="plan-name">
                                <h2>Service Plan Only</h2>
                                <h4><b>First Month is</b> Free</h4>
                                <p class="muted">The Service Plan Begins after the <b>Website Setup</b>. <br/> hosting, updates and support.</p>
                            </div>
                            <div class="plan-price">
                                <b>+$59</b> / month
                            </div>
                            <div class="plan-details">
                                <div>
                                    <b>Web hosting</b>
                                </div>
                                <div>
                                    <b>24/7 Support</b>
                                </div>
                                <div>
                                    <b>Regular Site Backups</b>
                                </div>
                                <div>
                                    <b>Wordpress Updates</b>
                                </div>
                            </div>
                            <div class="plan-action">
                                <a href="<?php get_site_url(); ?>/sign-up-2/" class="btn btn-block btn-large">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="muted text-center">Note: You can change or cancel your plan at anytime in your account settings.</p>
            </div>
        </div>
    </section>

<?php get_footer(); ?>