<?php


function my_custom_footer_override() {
 // Finding the number of active widget sidebars
 ?>
<footer class="content-info" role="contentinfo">
  <?php if ( shoestrap_getVariable( 'site_style' ) != 'boxed'  ) : ?><div class="<?php echo shoestrap_container_class(); ?>"><?php endif; ?>
    <div class="row">
      <?php shoestrap_footer_content_custom(); ?>

    </div>
  </div>
</footer>
 <?php
}


function shoestrap_footer_content_custom() {
  // Finding the number of active widget sidebars
  $num_of_sidebars = 0;
  $base_class = 'col-md-';

  for ( $i=0; $i<5 ; $i++ ) {
    $sidebar = 'sidebar-footer-'.$i.'';
    if ( is_active_sidebar( $sidebar ) )
      $num_of_sidebars++;
  }

  // Showing the active sidebars
  for ( $i=0; $i<5 ; $i++ ) {
    $sidebar = 'sidebar-footer-' . $i;

    if ( is_active_sidebar( $sidebar ) ) {
      // Setting each column width accordingly
      $col_class = 12 / $num_of_sidebars;
    
      echo '<div class="' . $base_class . $col_class . '">';
      dynamic_sidebar( $sidebar );
      echo '</div>';
    }
  }

  // Showing extra features from /lib/modules/core.footer/functions.footer.php
  do_action( 'shoestrap_footer_pre_override' );
  echo '</div>';
}
add_action( 'shoestrap_footer_override', 'my_custom_footer_override' );
?>