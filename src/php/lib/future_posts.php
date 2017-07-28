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

// ref: https://wordpress.org/support/topic/urls-incorrect-for-scheduled-posts/#post-6109661
function future_permalink( $permalink, $post, $leavename ) {
    /* for filter recursion (infinite loop) */
    static $recursing = false;

    if ( empty( $post->ID ) ) {
        return $permalink;
    }

    if ( !$recursing ) {
        if ( isset( $post->post_status ) && ( 'future' === $post->post_status ) ) {
            // set the post status to publish to get the 'publish' permalink
            $post->post_status = 'publish';
            $recursing = true;
            return get_permalink( $post, $leavename ) ;
        }
    }

    $recursing = false;
    return $permalink;
}

add_filter( 'post_link', 'future_permalink', 10, 3 );
