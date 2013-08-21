<?php
/**
 * Tell robots to not index this site. Description of content value here
 * http://yoast.com/articles/robots-meta-tags/
 *
 * These tags take precedence over robots.txt, cited here:
 * http://googlewebmastercentral.blogspot.com/2007/03/using-robots-meta-tag.html
 *
 * This is added with priority 99 to wp_head so will appear after WordPress's
 * default privacy setting that modifies the meta robots tag (Settings->Reading)
 *
 * Don't use this snippet if you want to use that site option or are using a
 * separate SEO plugin.
 */

function dko_meta_robots() {
  echo <<<EOS
  <meta name="ROBOTS"     content="none,noarchive,nosnippet,noodp,noydir">
EOS;
  /* for specific bots
  <meta name="GOOGLEBOT"  content="none,noarchive">
  <meta name="MSNBOT"     content="none,noarchive">
  <meta name="SLURP"     content="none,noarchive">
  <meta name="TEOMA"     content="none,noarchive">
   */
}
add_action('wp_head', 'dko_meta_robots', 99);
