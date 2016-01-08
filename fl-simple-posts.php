<?php
/**
 * Plugin Name: Simple post module
 * Description: A plugin to list posts with a certain template
 * Version: 1.3.3
 * Author: MWi AB
 * Author URI: http://mwi.se
 */
// Load text domain
load_plugin_textdomain( 'fl-simple-posts', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );

define('FL_SIMPLE_POSTS_DIR', plugin_dir_path(__FILE__));
define('FL_SIMPLE_POSTS_URL', plugins_url('/', __FILE__));

if(class_exists('FLBuilder')) {

    function fl_load_module_simple_posts() {
        require_once 'simple-posts/simple-posts.php';
    }

    add_action('init', 'fl_load_module_simple_posts');
}
