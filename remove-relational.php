<?php
// remove <link rel> relational next/previous post info from wp_head
// http://wordpress.org/support/topic/remove-post-relational-links-from-wp_head?replies=14
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
