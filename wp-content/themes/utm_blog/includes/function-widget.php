<?php

function utmblog_widget() {
    register_sidebar(array(
        'name' => __('Primary Sidebar', 'theme_name'),
        'id' => 'sidebar-widget',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'utmblog_widget');