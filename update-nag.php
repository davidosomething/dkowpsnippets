<?php
/**
 * Remove the update plugins/WordPress notice from the Dashboard for non-admins
 */
if (!current_user_can('update_plugins')) {
  remove_action('admin_notices', 'update_nag', 3);
}
