<?php
/**
 * Custom functions
 */
// Prioritize loading of some necessary core modules
if ( file_exists( get_template_directory() . '/lib/modules/core.redux/module.php' ) ) :
        require_once get_template_directory() . '/lib/modules/core.redux/module.php';
endif;
if ( file_exists( get_template_directory() . '/lib/modules/core/module.php' ) ) :
        require_once get_template_directory() . '/lib/modules/core/module.php';
endif;
if ( file_exists( get_template_directory() . '/lib/modules/core.layout/module.php' ) ) :
        require_once get_template_directory() . '/lib/modules/core.layout/module.php';
endif;
if ( file_exists( get_template_directory() . '/lib/modules/core.images/module.php' ) ) :
        require_once get_template_directory() . '/lib/modules/core.images/module.php';
endif;
 
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


/*
 * Add a less file from our child theme to the parent theme's compiler.
 * This uses the 'shoestrap_compiler' filter that exists in the shoestrap compiler
 */
add_filter( 'shoestrap_compiler', 'shoestrap_child_styles' );
function shoestrap_child_styles( $bootstrap ) {
        return $bootstrap . '
        @import "' . get_stylesheet_directory() . '/assets/less/vu-styles.less";';
}


?>