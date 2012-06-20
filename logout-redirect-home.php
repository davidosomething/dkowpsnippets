<?php
// redirect to homepage if user is on the logout page
if (preg_match('#(wp-login.php)?(loggedout=true)#', $_SERVER['REQUEST_URI'])) {
  wp_redirect(home_url());
}
