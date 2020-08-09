<form role="search" method="get" class="container col-md-8 mx-auto d-flex" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" class="search-form contact-form" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'wp-times-art' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'wp-times-art' ); ?>">
    <button type="submit" class="footer-cta" value="<?php echo esc_attr_x( 'Search', 'submit button', 'wp-times-art' ); ?>">Search</button>
</form>