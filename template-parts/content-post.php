<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Times_art
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header id="posthead" class="row entry-header mx-2 sticky-top">
		<div class="col-md-8 px-md-2">
			<div class="btn-back" onclick="history.back();" aria-label="back">< Back </div>
		</div>
		<div class="col-md-4">
			<h1 class="entry-title mb-0 pb-0">
				<?php the_title(); ?><br>
				<span style="font-size: 1rem;">
					<?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>
				</span>
			</h1>
		</div>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-times-art' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
