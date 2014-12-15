<?php
// Theme setup
add_action( 'after_setup_theme', 'theme_setup' );

function theme_setup(){
    // Automatic feed
    add_theme_support( 'automatic-feed-links' );

    // Post thumbnails
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'post-image', 800, 9999 );
}