<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Times_art
 */

get_header(); ?>

	<section id="primary" class="content-area mt-5 pt-5 px-0 container">
		<main id="main" class="site-main d-flex justify-center error-404" role="main" style="background: url(<?php echo get_template_directory_uri() ;?>/inc/assets/img/404-background-Paper-Tear.png);">

		<section class="not-found text-center col-12 my-auto text-white">
				<header class="page-header">
					<h1 class="page-title text-white"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wp-times-art' ); ?></h1>
				</header><!-- .page-header -->
				
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wp-times-art' ); ?></p>

					<?php
						get_search_form();
					?>

				</div><!-- .page-content -->
			</section>

		</main><!-- #main .error-404 -->
	</section><!-- #primary -->
	</div>

<?php
// get_sidebar();
get_footer();
