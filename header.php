<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Times_art
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="shadow-lg vh-100 site-header navbar-static-top <?php echo WP_Times_art_bg_class(); ?>" role="banner">
        <div id="canvasWrapper" class="no-color">
            <canvas id="art-background" width="getWidth()" height="getHeight()"></canvas>
        </div>
        <script src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/acid-background.js"></script>
        <div class="container-fullwidth">
            <nav class="navbar pl-md-5 py-0 navbar-expand-xl col-12">
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'WP_Times_art_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_url(get_theme_mod( 'WP_Times_art_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                            <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                        </a>
                    <?php endif; ?>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>
            </nav>


            <div id="subheader">
                <div class="container vh-100 d-flex justify-center">
                    <div class="col-12 my-auto p-0">
                        <h1>
                            <?php
                            if(get_theme_mod( 'header_banner_title_setting' )){
                                echo get_theme_mod( 'header_banner_title_setting' );
                            }else{
                                echo 'CHOOOMEDIA + Wordpress';
                            }
                            ?>
                        </h1>
                        <p>
                            <?php
                            if(get_theme_mod( 'header_banner_tagline_setting' )){
                                echo get_theme_mod( 'header_banner_tagline_setting' );
                            }
                            ?>
                        </p>
                        <a href="#content" class="page-scroller"><i class="fa fa-2x fa-angle-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
                <?php endif; ?>