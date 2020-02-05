<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Times_art
 */

get_header(); ?>

	<section id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

			endwhile; // End of the loop.
			?>

		<!-- Loop the Posts if Front-Page -->
		<?php if(is_front_page()) : ?>
		<nav class="col-12 p-md-0 m-0" aria-label="Categories List">
			<ul class="col-md-6 col-10 categories">
				<?php wp_list_categories('title_li='); ?>
			</ul>
		</nav>

		<?php
			$args = array(
				'post_type'      => 'post',
				'posts_per_page' => - 1,
			);
			$q    = new WP_Query( $args );
		?>

		<div class="row">
			<?php while ( $q->have_posts() ) : $q->the_post();?>
			<?php if (has_post_thumbnail( $post->ID )) : ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); endif ?>
				
				<a class="col-md-4 px-md-4 post-box <?php sps_category() ?>" href="<?php the_permalink(); ?>">
					<div class="post-img shadow no-color" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
					<p class="post-img-p"><?php echo get_the_excerpt(); ?></p>
					</div>
					<h3><?php the_title(); ?></h3>
				</a>
			<?php endwhile; ?>
		</div>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
