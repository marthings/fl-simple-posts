<?php
/**
 * Plugin Name: Simple post module
 * Description: A plugin to list posts with a certain template
 * Version: 1.0
 * Author: MWi AB
 * Author URI: http://mwi.se
 */
define('FL_MODULE_EXAMPLES_DIR', plugin_dir_path(__FILE__));
define('FL_MODULE_EXAMPLES_URL', plugins_url('/', __FILE__));

if(class_exists('FLBuilder')) {

    function fl_load_module_simple_posts() {
        require_once 'simple-posts/simple-posts.php';
    }

    add_action('init', 'fl_load_module_simple_posts');
}
