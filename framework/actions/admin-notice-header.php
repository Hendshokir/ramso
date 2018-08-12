<?php
function sample_admin_notice__success() {
  ?>
  <div class="notice notice-warning"
  style="background-image:url('<?= Utilities::resources_path('/assets/images/code95-logo.png'); ?>');
  background-repeat: no-repeat ;background-position: 96% 45% ;height:100px;">
  </div>
  <?php
}
add_action( 'admin_notices', 'sample_admin_notice__success' );
