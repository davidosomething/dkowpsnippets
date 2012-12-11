<?php
/**
 * Remove Quick Press Dashboard Widgets
 */
function dko_remove_quickpress() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
}
add_action('wp_dashboard_setup', 'dko_remove_quickpress');
