<?php

// Add Scripts
function wdgt_add_scripts() {
    // Add Main CSS
    wp_enqueue_style('wdgt-main-style', plugins_url() . '/widget/css/style.css');
    // Add Main JS
    wp_enqueue_script('wdgt-main-script', plugins_url() . '/widget/js/main.js');
}

add_action('wp_enqueue_scripts', 'wdgt_add_scripts');