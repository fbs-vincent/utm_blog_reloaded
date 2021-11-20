<?php 

add_action('wp_head', 'utmblog_fonts');

function utmblog_fonts() {
    wp_enqueue_style( 'utmblog_font_bold', get_template_directory_uri() . '/fonts/Poppins-Bold.woff2' );
    wp_enqueue_style( 'utmblog_font_regular', get_template_directory_uri() . '/fonts/Poppins-Regular.woff2' );
    wp_enqueue_style( 'utmblog_font_light', get_template_directory_uri() . '/fonts/Poppins-Light.woff2' );
    wp_enqueue_style( 'utmblog_font_semibold', get_template_directory_uri() . '/fonts/Poppins-SemiBold.woff2' );
    wp_enqueue_style( 'utmblog_font_extralight', get_template_directory_uri() . '/fonts/Poppins-ExtraLight.woff2' );
}

add_action('wp_enqueue_scripts', 'utmblog_assets');

function utmblog_assets() {
    wp_enqueue_style('utmblog_style', get_template_directory_uri() . '/css/main.min.css',   microtime());
    wp_enqueue_script('utmblog_script', get_template_directory_uri() . '/js/script.js', NULL, microtime(), true);
}
