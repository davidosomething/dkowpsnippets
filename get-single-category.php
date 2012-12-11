<?php
if (!function_exists('dko_get_single_category')):
/**
 * dko_get_single_category
 *
 * @access public
 * @return void
 */
function dko_get_single_category() {
  $category = get_the_category();
  if (!$category) {
    return '';
  }
  return $category[0]->cat_name;
}
endif;
