<?php
/**
 * Plugin Name:     Default
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     default
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Default
 */

defined( 'ABSPATH' ) || exit;
define( 'PLUGIN_FILE', __FILE__ );
define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Your code starts here.
if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Enqueue scripts and styles.
 */
function default_ui_scripts()
{
	echo '<link href="'.PLUGIN_URL.'inc/build/assets/css/main.css" rel="stylesheet">';
	echo '<script type="module" src="'.PLUGIN_URL.'inc/build/js/main.js"></script>';
	echo '<script type="module" src="'.PLUGIN_URL.'inc/build/js/app.js"></script>';
}
add_action('wp_enqueue_scripts', 'default_ui_scripts');

/**
 * Functions which enhance the plugin by hooking into WordPress.
 */
require PLUGIN_PATH . '/inc/functions/activate.php';
require PLUGIN_PATH . '/inc/functions/deactivate.php';
require PLUGIN_PATH . '/inc/functions/uninstall.php';
require PLUGIN_PATH . '/inc/server-functions.php';
require PLUGIN_PATH . '/inc/rest_route/analytics/v1/visitors.php';