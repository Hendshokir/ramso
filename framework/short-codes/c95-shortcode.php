<?php
/*
* [c95_shortcode]
*/
use Roots\Sage\Assets;

function c95_shortcode($atts){
  ob_start();
  ?>



  <?php _e('Test ShortCodes','C95');?>



  <?php
  return ob_get_clean();
}
add_shortcode('c95_shortcode', 'c95_shortcode' );
