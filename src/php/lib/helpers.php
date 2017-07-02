<?php
function get_vendor_uri() {
    return get_template_directory_uri() . '/vendor';
}

function get_header_logo_uri( $zoom = '' ) {
    return get_template_directory_uri() . '/image/header-logo' . $zoom . '.png';
}