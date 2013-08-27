<?php
/* disables theme upgrade notifications */
remove_action ('load-update-core.php', 'wp_update_themes');
add_filter ('pre_site_transient_update_themes', create_function('$a', "return null;"));
