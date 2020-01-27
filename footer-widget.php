<?php

if ( is_active_sidebar( 'footer-widget' ) ) {?>
    <div id="footer-widget" class="row m-0 <?php if(!is_theme_preset_active()); ?>">
        <?php if ( is_active_sidebar( 'footer-widget' )) : ?>
            <div class="col-12 "><?php dynamic_sidebar( 'footer-widget' ); ?></div>
        <?php endif; ?>
    </div>
<?php }