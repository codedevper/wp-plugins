<?

/**
 * Activation hook – create the custom DB table and log directory.
 */
register_activation_hook( __FILE__, 'activate_log_visitors' );
function activate_log_visitors() {
	global $wpdb;

	$charset_collate = $wpdb->get_charset_collate();
	$table_name      = $wpdb->prefix . 'log_visitors';

	$sql = "CREATE TABLE IF NOT EXISTS {$table_name} (
		matching_id VARCHAR(100) DEFAULT '',
		pathname  TEXT,
		status  TEXT,
		metrics  TEXT,
		user_id VARCHAR(100) DEFAULT '',
		created_at  DATETIME DEFAULT CURRENT_TIMESTAMP
	) {$charset_collate};";

	require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	dbDelta( $sql );
}
