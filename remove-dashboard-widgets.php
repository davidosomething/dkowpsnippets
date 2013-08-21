<?php
/**
 * Remove Dashboard Widgets
 * Only removes widgets that are really useless
 */
function dko_remove_dashboard_widgets() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  if (!current_user_can('publish_posts')) {
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
  }

  // most popular plugins
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);

  // wordpress blog
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);

  // other wordpress news
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}
add_action('wp_dashboard_setup', 'dko_remove_dashboard_widgets');
