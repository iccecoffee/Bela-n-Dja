<?php
function load_theme_js(){
    if ( !is_admin() ) {
        wp_register_script( 'bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '', true );
        wp_register_script( 'global_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '', true );

        wp_enqueue_script( 'bootstrap_js' );
        wp_enqueue_script( 'global_js' );

        if ( is_singular() && get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }

    }
}
add_action( 'wp_enqueue_scripts', 'load_theme_js' );

function load_theme_css(){
    if ( !is_admin() ) {
        wp_register_style('google_font', '//fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' );
        wp_register_style('bootstrap_css', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
        wp_register_style('global_style', get_stylesheet_uri() );

        wp_enqueue_style( 'google_font' );
        wp_enqueue_style( 'bootstrap_css' );
        wp_enqueue_style( 'global_style' );
    }
}
add_action('wp_print_styles', 'load_theme_css');