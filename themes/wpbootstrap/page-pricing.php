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
                                    <b>✔ &nbsp; Go Live on One Week!</b>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="plan prefered">
                            <div class="plan-name">
                                <h2>Service Plan + Email</h2>
                                <h4><b>First Month is</b> Free</h4>
                                <p class="muted">Boost your reach with an email marketing campaign - All of the benefits of the Service Plan, with Email Marketing.</p>
                            </div>
                            <div class="plan-price">
                                <b>+$79</b> / month
                            </div>
                            <div class="plan-details">
                                <div>
                                    <b>Includes Service Plan</b>
                                </div>
                                <div>
                                    <b>Done-for-you Monthly Email Blasts</b>
                                </div>
                                <div>
                                    <b>Email Form Integration into your Website</b>
                                </div>
                                <div>
                                    <b>Email Layout to Match your Website</b>
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
                                <p class="muted">The Service Plan Begins after the <b>Website Setup</b>. <br/>It covers web updates, hosting and support.</p>
                            </div>
                            <div class="plan-price">
                                <b>+$59</b> / month
                            </div>
                            <div class="plan-details">
                                <div>
                                    <b>Done for you Web Updates</b>
                                </div>
                                <div>
                                    <b>24/7 Support</b>
                                </div>
                                <div>
                                    <b>Regular Site Backups</b>
                                </div>
                                <div>
                                    <b>Email Addresses @yourdomain.com</b>
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