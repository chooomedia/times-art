<?php
/**
 * Template part for displaying Posts in a 3-col Bootstrap Grid Overview
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Times_art
 */

?>
<article class="col-md-4 vh-25 <?php sps_category() ?>" id="portfolio-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
        <?php 
    $enable_vc = get_post_meta(get_the_ID(), '_wpb_vc_js_status', true);
    if(!$enable_vc ) { ?>
        <div class="portfolio-thumbnail"
            style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');background-repeat: no-repeat;">
        </div><!-- .entry-content -->
        <h3><?php the_title(); ?></h3>
        <?php } ?>
    </a>
</article><!-- #post-## -->