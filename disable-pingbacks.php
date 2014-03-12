<?php
/**
 * Disable XML-RPC pingbacks
 * http://wptavern.com/how-to-prevent-wordpress-from-participating-in-pingback-denial-of-service-attacks
 */
function dko_remove_xmlrpc_pingback_ping($methods) {
   unset($methods['pingback.ping']);
   return $methods;
}
add_filter('xmlrpc_methods', 'dko_remove_xmlrpc_pingback_ping');
