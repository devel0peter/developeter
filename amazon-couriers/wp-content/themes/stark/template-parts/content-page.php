<?php
/**
 * Template part for displaying page content in page.php
 * Created by PhpStorm.
 * User: developeter
 * Date: 19/06/17
 * Time: 20:27
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </div><!-- .entry-header -->
    <div class="entry-content">
        <?php
        the_content();

        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'pluto'),
            'after' => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
