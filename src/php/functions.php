<?php
function threeforflavin_load_libs() {
    $pattern = get_template_directory() . '/lib/*.php';

    foreach ( glob( $pattern ) as $filepath ) {
        load_template( $filepath, true );
    }
}

add_action( 'after_setup_theme', 'threeforflavin_load_libs', 0 );