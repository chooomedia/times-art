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

<footer id="colophon" class="site-footer <?php echo WP_Times_art_bg_class(); ?>" role="contentinfo">
	<div class="container pt-4 pb-1">
		<p class="footer-adress">
			Times Art<br>
			digital Design
		</p>
		<div class="container px-0 py-0 pt-md-0">
			<?php get_template_part( 'footer-widget' ); ?>
		</div>
		<div class="container py-0 px-0">
			<?php get_template_part( 'footer-underline-menu' ); ?>
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