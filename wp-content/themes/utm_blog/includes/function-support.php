<?php 

function architecture_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'text_domain' ),
        'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        'sidebar_menu'  => __( 'Sidebar Menu', 'text_domain' ),
    ) );
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'architecture_register_nav_menu');

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_image_size( 'utmblog_thumb', 600, 300 );