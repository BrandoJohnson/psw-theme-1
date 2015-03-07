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
                            This is the question that will be asked?
                        </label>
                        <div class="answers">
                            What if the answer is really long and wraps the whole page and you never want to finish it but you have to because its the answer!
                        </div>
                    </div>

                    <div>
                        <input type="checkbox" id="question2" name="q" class="questions">
                        <div class="plus">+</div>
                        <label for="question2" class="question">
                            Short?
                        </label>
                        <div class="answers">
                            short!
                        </div>
                    </div>

                    <div>
                        <input type="checkbox" id="question3" name="q" class="questions">
                        <div class="plus">+</div>
                        <label for="question3" class="question">
                            But what if the question is really long and wraps the whole page and you feel like you will never finish reading the question?
                        </label>
                        <div class="answers">
                            This is the answer!
                        </div>
                    </div>
                    <p class="muted text-center"><?php the_content(); ?></p>
                </div>


            </div>
        </div>
    </section>

<?php get_footer(); ?>