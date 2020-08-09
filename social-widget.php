<?php

if ( is_active_sidebar( 'social-widget' ) ) {?>
    <div id="social-widget" class="row m-0 <?php if(!is_theme_preset_active()); ?>">
        <?php if ( is_active_sidebar( 'social-widget' )) : ?>
            <?php dynamic_sidebar( 'social-widget' ); ?>
        <?php endif; ?>
    </div>
<?php }