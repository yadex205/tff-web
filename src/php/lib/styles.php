<?php
function threeforflavin_styles() {
    wp_enqueue_style( 'font-awesome', get_vendor_uri() . '/font-awesome/css/font-awesome.min.css' );
    wp_enqueue_style( 'threeforflavin', get_stylesheet_uri(), array( 'font-awesome' ) );
}

add_action( 'wp_enqueue_scripts', 'threeforflavin_styles' );

function threeforflavin_page_style( $template ) {
    $template_name = pathinfo( $template )['filename'];
    $css_url = get_template_directory_uri() . '/style/' . $template_name . '.css';

    wp_enqueue_style( 'threeforflavin-' . $template_name, $css_url, array( 'threeforflavin' ) );

    return $template;
}

add_filter( 'template_include', 'threeforflavin_page_style' );