<?php

include 'includes/theme-setup.php';
include 'includes/assets-loader.php';

function replace_excerpt($content) {
    return str_replace('[&hellip;]',
        '<span class="more-link"><a href="'. get_permalink() .'"> Continue Reading..</a></span>',
        $content
    );
}
add_filter('the_excerpt', 'replace_excerpt');

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'Homepage Sidebar',
        'id' => 'homepage-sidebar',
        'description' => 'Appears as the sidebar on the custom homepage',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}