<?php
/**
 * Te template for displaying all pages
 * Created by PhpStorm.
 * User: developeter
 * Date: 19/06/17
 * Time: 20:29
 */

get_header(); ?>

    <div class="row">
        <div class="col-sm-9">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <?php
                    while (have_posts()) : the_post();

                        get_template_part('template-parts/content', 'page');

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>

                </main><!-- #main -->
            </div><!-- #primary -->
        </div>

    </div><!-- .wrap -->

<?php get_footer();