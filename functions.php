<?php
/**
 * Custom functions
 */

function addStyles() {
    wp_enqueue_style('shoestrap-vu-css', get_stylesheet_directory_uri().'/style.css');
}
add_action('wp_head', 'addStyles');