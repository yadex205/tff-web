<?php
function threeforflavin_scripts() {
    if ( getenv( 'PHP_ENV' ) == 'development' ) {
        wp_enqueue_script( 'vue', get_vendor_uri() . '/vue/vue.js');
    } else {
        wp_enqueue_script( 'vue', get_vendor_uri() . '/vue/vue.min.js');
    }

    $site_script_uri = get_template_directory_uri() . '/js/site.js';
    wp_enqueue_script( 'threeforflavin', $site_script_uri, array( 'vue' ) );
}

add_action( 'wp_enqueue_scripts', 'threeforflavin_scripts' );