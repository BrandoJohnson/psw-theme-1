<?php

/*
Template Name: FAQ Page
*/

get_header(); ?>

    <section class="section sectione">

        <div class="main-content">
            <div class="container row-fluid">

                <div class="content">

                    <div class="section-headlines">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class='text-center'>
                                <h2><?php the_title(); ?></h2>
                            </div>

                        <?php endwhile; else: ?>
                            <p><?php _e('Sorry, this page does not exist.'); ?></p>
                        <?php endif; ?>
                    </div>

                    <div>
                        <input type="checkbox" id="question1" name="q"  class="questions">
                        <div class="plus">+</div>
                        <label for="question1" class="question">
                            Can I sign up for the service plan and decide to redo my site later?
                        </label>
                        <div class="answers">
                            Yes! You can sign up for either the service plan or the Content + Service Plan and redo your website later if you decide to. Just specify 'I don't need a re-do, just monthly content updates to my website.' on the
                            <a href="/sign-up/">Sign Up</a> page.
                        </div>
                    </div>

                    <div>
                        <input type="checkbox" id="question2" name="q" class="questions">
                        <div class="plus">+</div>
                        <label for="question2" class="question">
                            Can I just sign up for a website, but not a service plan?
                        </label>
                        <div class="answers">
                            No. Either the Service Plan or the Service Plan + Content are required when you sign up for a website.
                        </div>
                    </div>

                    <div>
                        <input type="checkbox" id="question3" name="q" class="questions">
                        <div class="plus">+</div>
                        <label for="question3" class="question">
                            I just signed up and set up my website, now what?
                        </label>
                        <div class="answers">
                            Check your inbox! You will have received an email with details and how you can send us content for your new site. Didn't get it?
                        </div>
                    </div>
                    <div>
                        <input type="checkbox" id="question3" name="q" class="questions">
                        <div class="plus">+</div>
                        <label for="question3" class="question">
                            I just signed up and set up my website, now what?
                        </label>
                        <div class="answers">
                            We will be in touch with you shortly with details and how you can send us content for your new site.
                        </div>
                    </div>
                    <p class="muted text-center"><?php the_content(); ?></p>
                </div>


            </div>
        </div>
    </section>

<?php get_footer(); ?>