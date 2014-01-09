<?php

if ( !function_exists( 'shoestrap_banner' ) ) :
/*
 * The site banner.
 * If no custom banner is uploaded, use the sitename
 */
function shoestrap_logo() {
  $banner  = shoestrap_getVariable( 'banner' );

  if ( !empty( $banner['url'] ) )
    echo '<img id="site-banner" src="' . $banner['url'] . '" alt="' . get_bloginfo( 'name' ) . '">';
  else
    echo '<span class="sitename">' . bloginfo( 'name' ) . '</span>';
}
endif;

if ( !function_exists( 'shoestrap_branding_class' ) ) :
function shoestrap_branding_class( $echo = true ) {
  $logo  = shoestrap_getVariable( 'logo' );

  // apply the proper class
  $class = ( !empty( $banner['url'] ) ) ? 'banner' : 'text';

  // echo or return the value
  if ( $echo )
    echo $class;
  else
    return $class;
}
endif;