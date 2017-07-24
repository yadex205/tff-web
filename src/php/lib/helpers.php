<?php
function get_vendor_uri() {
    return get_template_directory_uri() . '/vendor';
}

function get_header_logo_uri( $zoom = '' ) {
    return get_template_directory_uri() . '/image/header-logo' . $zoom . '.png';
}

function get_scheduled_live_posts( $tag = '', $limit = -1 ) {
    $posts = get_posts( array( 'category_name'  => 'live',
                               'tag'            => $tag,
                               'posts_per_page' => $limit,
                               'post_status'    => 'publish,future',
                               'date_query'     => array( 'inclusive' => true, 'after' => date_i18n( 'Y/n/j' ) ) ) );
    return array_reverse( $posts );
}