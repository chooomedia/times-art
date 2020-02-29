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
	<footer id="colophon" class="site-footer <?php echo WP_Times_art_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">

            <div class="offset-md-3 col-md-6 text-center">
				<div class="container">
				<div class="footer-cta col-4">
					<a title="Get in Touch" href="/get-in-touch/">Get in Touch</a>
				</div>
					<nav class="footer-nav">
						<?php get_template_part( 'footer-widget' ); ?>
					</nav>
				</div>
				<div class="site-info">
					&copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
					<a class="credits" href="https://chooomedia.de" target="_blank" title="WordPress Technical Support" alt="Times-Art is a CHOOOMEDIA crafted Wordpress template">a CHOOOMEDIA WordPress Template</a>
				</div><!-- close .site-info -->
			</div>
		</div>
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