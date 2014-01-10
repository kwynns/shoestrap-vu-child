<?php
/**
 * Custom functions
 */
 
 
//load custom modules
require_once locate_template('/modules/banner/module.php');

//load over-rides
require_once locate_template('/overrides/footer.php');


//adds style.css to head
function addStyles() {
    wp_enqueue_style('shoestrap-vu-css', get_stylesheet_directory_uri().'/style.css');
}
add_action('wp_head', 'addStyles');

//include widgets
require_once locate_template('/widgets/widgets.php');

?>