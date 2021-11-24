<?php
/*
Plugin Name: Sidebar
Plugin URI: https://blog.unleashthemasterpiece.com/
Description: Display sidebar for blog
Version: 0.1.0
Author: Vincent Ramirez
Author URI: https://blog.unleashthemasterpiece.com/
*/

// Exit if accessed directly
if(!defined('ABSPATH')) {
    exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/widget-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__).'/includes/widget-class.php');

// Register Widget
function register_wdgt() {
    register_widget('Widget_Widget');
}

// Hook in function
add_action('widgets_init', 'register_wdgt');