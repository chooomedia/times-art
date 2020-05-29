<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Times_art
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<img class="thumbs" />

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'post' );

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) :
			//	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</section><!-- #primary -->
	<script>
	jQuery(function($) {
		if($('iframe').length > 0) {
			let vimeoIframeUrl = $('iframe').attr('src');
			let video_id = vimeoIframeUrl.split('video/')[1];
			let ampersandPosition = video_id.indexOf('?dnt');

			if(ampersandPosition != -1) {
				video_id = video_id.substring(0, ampersandPosition);
			}

			$.getJSON('https://www.vimeo.com/api/v2/video/' + video_id + '.json?callback=?', {format: "json"}, function(data) {
				$('#masthead').css('background-image', 'url('+ data[0].thumbnail_large +')');
				console.log(data);
			});
		}
	});
	</script>

<?php
get_footer();
