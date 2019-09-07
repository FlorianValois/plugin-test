<?php
/*
Plugin Name: Plugin Test
Plugin URI: 
Description:  A boilerplate plugin for WordPress with many options 
Version: 1.0
Author: Florian Valois
Author URI: https://florian-valois.com
Text Domain: plugin-test
Domain Path: /languages
GitHub Plugin URI: 
*/

if (!defined('ABSPATH')) {
	exit;
}

define( 'BPW_PLUGIN', __FILE__ );
define( 'BPW_PLUGIN_BASENAME', plugin_basename( BPW_PLUGIN ) );
define( 'BPW_PLUGIN_NAME', trim( dirname( BPW_PLUGIN_BASENAME ), '/' ) );
define( 'BPW_PLUGIN_DIR', untrailingslashit( dirname( BPW_PLUGIN ) ) );

/* Github update master */
require_once BPW_PLUGIN_DIR . '/plugin-update-checker/plugin-update-checker.php';

$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://florian-valois.com/plugin-test/details.json',
	__FILE__, //Full path to the main plugin file or functions.php.
	'plugin-test'
);