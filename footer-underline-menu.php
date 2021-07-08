<?php

if ( is_active_sidebar( 'footer-underline-menu' ) ) {?>
<div id="footer-underline" class="row m-0 mt-1 <?php if(!is_theme_preset_active()){ echo 'bg-light'; } ?>">
    <div class="col-12 p-0 m-0">
        <?php dynamic_sidebar( 'footer-underline-menu' ); ?>
        <span class="site-info">
            &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
        </span><!-- close .site-info -->
    </div>
</div>

<?php } ?>