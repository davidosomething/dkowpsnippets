<?php
// since 3.1.0
// http://codex.wordpress.org/Function_Reference/show_admin_bar
show_admin_bar(current_user_can('edit_posts'));

function dko_hide_admin_bar() {
  ?><style type="text/css">.show-admin-bar { display: none; }</style><?php
}

function dko_disable_admin_bar() {
   if (!current_user_can('edit_posts')) {
      add_filter('show_admin_bar', '__return_false');
      add_action('admin_print_scripts-profile.php', 'dko_hide_admin_bar');
   }
}
add_action('init', 'dko_disable_admin_bar', 9);
