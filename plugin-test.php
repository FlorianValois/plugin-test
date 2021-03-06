<?php
/*
Plugin Name: Plugin Test
Plugin URI: 
Description: A boilerplate plugin for WordPress with many options 
Version: 1.0.11
Author: Florian Valois
Author URI: https://florian-valois.com
Text Domain: plugin-test
Domain Path: /languages
GitHub Plugin URI: https://github.com/FlorianValois/plugin-test/archive/master.zip
*/

if (!defined('ABSPATH')) {
	exit;
}

define( 'BPW_PLUGIN', __FILE__ );
define( 'BPW_PLUGIN_BASENAME', plugin_basename( BPW_PLUGIN ) );
define( 'BPW_PLUGIN_NAME', trim( dirname( BPW_PLUGIN_BASENAME ), '/' ) );
define( 'BPW_PLUGIN_DIR', untrailingslashit( dirname( BPW_PLUGIN ) ) );

/* Github update master */
require 'plugin-update-checker/plugin-update-checker.php';

$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/FlorianValois/plugin-test',
	__FILE__, //Full path to the main plugin file or functions.php.
	'plugin-test'
);

add_filter( 'plugin_row_meta', 'wk_plugin_row_meta', 10, 2 );
function wk_plugin_row_meta( $links, $file ) {    
    if ( BPW_PLUGIN_BASENAME == $file ) {
			var_dump($links);
//			var_dump($file);
        $custom_link = array(
          'docs'    => '<a href="' . esc_url( 'https://webkul.com/blog/' ) . '" target="_blank" aria-label="' . esc_attr__( 'Plugin Additional Links', 'domain' ) . '" style="color:green;">' . esc_html__( 'Docs', 'domain' ) . '</a>'
        );
 
        return array_merge( $links, $custom_link );
    }
    return (array) $links;
}