<?php
/**
 * Custom functions
 */
 
//define('REDUX_OPT_NAME', 'shoestrap');
require_once locate_template('/modules/banner/module.php');
//require_once locate_template('/modules/footer/module.php');


function addStyles() {
    wp_enqueue_style('shoestrap-vu-css', get_stylesheet_directory_uri().'/style.css');
}
add_action('wp_head', 'addStyles');