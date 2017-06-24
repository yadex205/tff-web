<?php

function threeforflavin_enable_title() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'threeforflavin_enable_title' );

function threeforflavin_document_title_parts( $title ) {
    $title['tagline'] = null;
    return $title;
}

add_filter( 'document_title_parts', 'threeforflavin_document_title_parts' );