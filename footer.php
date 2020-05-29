<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Times_art
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- #content -->
			<?php if(is_front_page()) : ?>
			<section id="map" itemprop="hasMap" itemtype="http://schema.org/Map">
				<iframe style='width:100vw;height:40vh;' src='https://www.openstreetmap.org/export/embed.html?bbox=11.585198342800142%2C48.1632212098448%2C11.586955189704897%2C48.16477588163781&amp;layer=mapnik&amp;marker=48.16399855163147%2C11.586076766252518'></iframe><br>
			</section>
			<?php endif; ?>
			<footer id="colophon" class="site-footer <?php echo WP_Times_art_bg_class(); ?>" role="contentinfo">
				<div class="container pt-3 pb-3">

					<div class="text-center">
						<div class="container">
						<div class="footer-cta col-4">
							<a title="Contact" href="/contact/">Contact</a>
						</div>
							<nav class="social-nav">
								<?php get_template_part( 'social-widget' ); ?>
							</nav>
							<nav class="footer-nav mt-3">
								<?php get_template_part( 'footer-widget' ); ?>
							</nav>
						</div>
					</div>
				</div>
				<div class="site-info">
					&copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').' Film GmbH</a>'; ?> 
				</div><!-- close .site-info -->
			</footer><!-- #colophon -->
		<?php endif; ?>
		</div><!-- #page -->

		<?php if(!is_singular('post') && is_page() ) : ?>
		<script src="./wp-content/themes/times-art/inc/assets/js/mixitup.min.js"></script>
		<script>
			var mixer = mixitup('#portfolio-container');
		</script>
		<?php endif; ?>

	<?php wp_footer(); ?>
	</body>
</html>