<?php

if ( !function_exists( 'shoestrap_banner' ) ) :
/*
 * The Banner template
 */
function shoestrap_banner() { ?>
  <?php if ( shoestrap_getVariable( 'banner' ) == 1 ) : ?>
        <a class="banner" href="<?php echo home_url(); ?>/">
          <h1>
            <?php if ( function_exists( 'shoestrap_banner' ) ) : ?>
              <?php shoestrap_banner(); ?>
            <?php endif; ?>
          </h1>
        </a>
  <?php endif;
}
endif;
add_action( 'shoestrap_pre_navbar', 'shoestrap_banner', 5 );
