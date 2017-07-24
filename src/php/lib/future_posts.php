<?php
// ref: http://www.telegraphicsinc.com/2013/01/show-future-posts-in-wordpress-without-a-plugin/
function show_future_posts( $posts ) {
    global $wp_query, $wpdb;
    if ( is_single() && $wp_query->post_count == 0 ){
        $posts = $wpdb->get_results( $wp_query->request );
    }
    return $posts;
}

add_filter( 'the_posts', 'show_future_posts' );