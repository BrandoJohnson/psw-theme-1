<?php get_header(); ?>

    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="span2">
                    <h1>Themes</h1>
                    <?php get_sidebar(); ?>
                </div>

                <div class="span5">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?><?php the_post_thumbnail(); ?></a></h2>
                        <?php the_content(); ?>

                    <?php endwhile; else: ?>
                        <p><?php _e('Sorry, there are no posts.'); ?></p>
                    <?php endif; ?>

                </div>
                <div class="span5">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_content(); ?>

                    <?php endwhile; else: ?>
                        <p><?php _e('Sorry, there are no posts.'); ?></p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>