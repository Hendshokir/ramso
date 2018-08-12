<?php
function c95_admin_bar_stage($wp_admin_bar) {
  $current_stage = WP_ENV;
  $args = array(
    'id' => 'c95-views',
    'title' => '<span class="ab-icon dashicons-admin-site"></span>' . $current_stage . '',
    'href'   => '#',
    'meta' => array(
      'class' => 'c95-views c95_admin_bar_stage',
    )
  );
  $wp_admin_bar->add_node($args);
}

add_action('admin_bar_menu', 'c95_admin_bar_stage', 100);
