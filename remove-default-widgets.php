<?php
add_action('widgets_init', 'dko_remove_default_widgets');
function dko_remove_default_widgets() {
  unregister_widget( 'WP_Widget_Pages' );
  unregister_widget( 'WP_Widget_Calendar' );
  unregister_widget( 'WP_Widget_Archives' );
  unregister_widget( 'WP_Widget_Links' );
  unregister_widget( 'WP_Widget_Categories' );
  unregister_widget( 'WP_Widget_Recent_Posts' );
  unregister_widget( 'WP_Widget_Search' );
  unregister_widget( 'WP_Widget_Tag_Cloud' );
}
