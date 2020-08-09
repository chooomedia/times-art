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
<div id="page" class="site col-12 p-0 m-0">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-times-art' ); ?></a>
        <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
        <!-- Show art background on frontpage -->
        <?php if(is_front_page() && !is_single()) : ?>
            <!-- Add video background if ACF variable video-Id avaiable -->
            <?php $videoID = get_field('video_link'); ?>
            <?php if(get_field('video_link')) : ?>
                <header id="masthead" class="shadow-lg vh-100 site-header navbar-static-top <?php echo WP_Times_art_bg_class(); ?>" role="banner">
                <div class="vimeo-wrapper">
                    <iframe src="https://player.vimeo.com/video/<?php echo $videoID ?>?background=1&autoplay=1&loop=1&byline=0&title=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            <?php else : ?>
                <header id="masthead" class="shadow-lg vh-100 site-header navbar-static-top <?php echo WP_Times_art_bg_class(); ?>" style="background: #000;" role="banner">
            <? endif; ?>
        <? endif; ?>
        
        <!-- Show background thumbnail on single-sites -->
        <? if (!is_front_page() && is_page() || is_single()) : ?>
            <? if (has_post_thumbnail() ) : ?>
                <header id="masthead" class="shadow-lg site-header navbar-static-top header-thumbnail <?php echo WP_Times_art_bg_class(); ?>" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>'); background-position: center;" role="banner">
            <? else: ?>
                <header id="masthead" class="shadow-lg site-header navbar-static-top header-thumbnail <?php echo WP_Times_art_bg_class(); ?>" style="background-position: center;" role="banner">
            <? endif; ?>
        <? endif; ?>
        
            <div class="container">
                <div class="fixed-top container px-3 px-md-0">
                    <nav class="navbar py-0 px-md-2 navbar-expand-xl" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
                        <div class="navbar-brand pl-2 pl-md-0" itemprop itemtype="https://schema.org/Brand">
                            <?php if ( get_theme_mod( 'WP_Times_art_logo' ) ): ?>
                                <a href="<?php echo esc_url( home_url( '/' )); ?>">
                                    <svg style="transition:all .3s;" itemprop="logo" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 904.195313 724.953925" preserveAspectRatio="xMidYMid meet" height="42px" width="60px">
                                        <g transform="translate(-0.895652,725.578456) scale(0.100000,-0.100000)" fill="#363f59" stroke="none">
                                            <path d="M3965 7250 c-1914 -4 -3514 -10 -3555 -15 -55 -5 -85 -14 -112 -32 -54 -37 -212 -203 -252 -266 l-35 -55 -2 -3204 c-1 -1761 2 -3221 6 -3243 16 -88 116 -206 260 -309 44 -31 92 -66 107 -78 23 -18 49 -23 150 -32 80 -6 1515 -10 4088 -10 3624 0 3968 1 4002 16 56 25 187 116 245 171 35 33 59 66 72 101 10 28 39 97 64 154 l46 102 2 3008 c1 3148 0 3220 -41 3272 -11 14 -44 62 -75 106 -81 119 -216 254 -290 290 l-60 29 -570 1 c-313 0 -2136 -3 -4050 -6z m4525 -144 c108 -36 176 -83 251 -173 50 -59 72 -101 110 -208 l29 -84 -2 -3013 -3 -3013 -33 -65 c-40 -78 -54 -90 -108 -90 -210 0 -569 139 -834 323 -165 115 -393 323 -604 552 -60 66 -232 251 -381 410 -150 160 -328 351 -396 426 -68 75 -187 203 -264 286 -77 82 -189 203 -250 269 -214 233 -481 520 -587 631 -123 128 -148 164 -148 214 0 46 14 58 120 99 268 105 615 321 840 525 249 225 442 507 533 782 50 151 67 271 67 485 0 315 -38 482 -170 754 -159 325 -443 601 -808 785 -40 20 -79 42 -87 49 -23 19 -19 59 8 70 13 5 555 8 1342 7 1254 -2 1323 -3 1375 -21z m-8135 -431 c175 -51 269 -117 324 -227 l31 -61 0 -2636 c0 -1450 -5 -2690 -9 -2757 -5 -66 -16 -136 -24 -155 -38 -91 -189 -208 -344 -268 -107 -41 -124 -40 -176 8 l-42 39 -7 1409 c-4 774 -4 2126 0 3003 7 1480 9 1597 25 1620 39 57 92 62 222 25z m3273 -28 c309 -41 638 -122 872 -214 239 -94 410 -197 555 -335 141 -133 227 -264 296 -453 l33 -90 1 -280 0 -280 -33 -95 c-65 -189 -197 -387 -324 -488 -246 -195 -571 -333 -895 -377 -60 -9 -164 -25 -233 -38 -121 -21 -144 -22 -810 -22 -683 0 -685 0 -755 22 -38 13 -81 32 -95 42 l-25 20 -3 1206 c-2 828 1 1219 8 1246 18 67 98 141 174 160 17 4 256 7 531 5 479 -2 509 -3 703 -29z m-231 -3428 c242 -14 366 -33 417 -63 77 -46 170 -147 1081 -1171 88 -99 291 -326 450 -505 687 -773 830 -916 1161 -1161 105 -78 117 -103 67 -136 -26 -17 -104 -18 -1433 -18 -1231 0 -1408 2 -1431 15 -14 8 -50 44 -80 79 -30 35 -75 78 -100 96 -75 51 -265 113 -401 130 -153 18 -450 79 -558 114 -121 39 -219 99 -280 172 -27 33 -55 70 -62 82 -10 17 -13 269 -16 1137 -4 1236 -8 1171 60 1206 24 13 69 19 168 24 226 11 769 11 957 -1z"/>
                                        </g>
                                    </svg>
                                    <a itemprop="name" class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                                </a>
                            <?php endif; ?>

                        </div>

                        <button class="d-flex justify-content-center d-lg-none hamburger hamburger--collapse" type="button" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>

                        <script>
                            jQuery(function($) {
                                let hamburgerBtn = $(".hamburger");
                                let hamburgerBtnInner = $(".hamburger-inner");
                                let mainmenuUl = $("#menu-mainmenu");
                                let mainNav = $("#main-nav");
                                let mainmenuUlLinkEl = $("#menu-mainmenu li a");

                                hamburgerBtn.on("click", function() {
                                    $(this).toggleClass("is-active", "");
                                    hamburgerBtnInner.toggleClass("is-active", "");
                                    $(".site-title").toggleClass("is-active", "");
                                    $("svg g").attr('fill', function(index, attr){
                                        return attr == "#363f59" ? "#fff" : "#363f59" ;
                                    });
                                    $("#menu-mainmenu").toggleClass("is-active", "");
                                    mainNav.css('display', function(index, attr){
                                        return attr == "flex" ? "none" : "flex" ;
                                    });
                                })

                                mainmenuUlLinkEl.on("click", function() {
                                    hamburgerBtn.removeClass("is-active");
                                    hamburgerBtnInner.removeClass("is-active");
                                    $(".site-title").removeClass("is-active");
                                    $("svg g").attr("fill", "#363f59");
                                    $("#menu-mainmenu").toggleClass("is-active");
                                    mainNav.css("display", "none");
                                });
                            })
                        </script>

                        <?php
                        wp_nav_menu(array(
                        'theme_location'  => 'primary',
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
                </div>

                <div id="subheader">
                    <div class="row">
                    <?php if (is_front_page() && !is_single()) : ?>
                        <div class="vh-100 mx-auto d-flex justify-center">
                            <div class="col-12 my-auto p-0">
                                <h1 class="mt-10 outline text-center">
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
                    <?php endif; ?>
                    </div>
                </div>
            
        </header><!-- #masthead -->

        <div id="content" class="site-content col-12">
            <div class="container">
                <div class="row">
                    <?php endif; ?>