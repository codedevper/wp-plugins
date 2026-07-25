<?php
/**
 * Plugin Name:     Simple Analytics
 * Plugin URI:      https://github.com/codedevper/wp-plugins
 * Description:     Self-hosted analytics with live visitors, heatmaps, session replay, UTM tracking, and conversion tracking.
 * Author:          Code Devper
 * Author URI:      https://github.com/codedevper
 * Text Domain:     wp-simple-analytics
 * Domain Path:     /languages
 * Version:         1.0.0
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * License:         GPL v2 or later
 *
 * @package         wp-simple-analytics
 */

defined( 'ABSPATH' ) || exit;

define( 'SA_VERSION', '1.0.0' );
define( 'SA_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SA_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'SA_DB_VERSION', '1.0.0' );

require_once SA_PLUGIN_DIR . 'includes/class-database.php';
require_once SA_PLUGIN_DIR . 'includes/class-rest-api.php';
require_once SA_PLUGIN_DIR . 'includes/class-frontend-tracker.php';
require_once SA_PLUGIN_DIR . 'includes/class-admin-dashboard.php';
require_once SA_PLUGIN_DIR . 'includes/class-cleanup.php';

register_activation_hook( __FILE__, array( 'SA_Database', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'SA_Database', 'deactivate' ) );

add_action( 'plugins_loaded', 'sa_init' );

function sa_init() {
	if ( get_option( 'sa_db_version' ) !== SA_DB_VERSION ) {
		SA_Database::create_tables();
	}

	new SA_REST_API();
	new SA_Frontend_Tracker();
	new SA_Admin_Dashboard();
	new SA_Cleanup();
}
