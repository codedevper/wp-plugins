<?

/**
 * Uninstall hook – drop the table and remove the log directory.
 */
register_deactivation_hook(__FILE__, 'deactivate');
function deactivate()
{
	global $wpdb;

	$tables = [
		$wpdb->prefix . 'log_visitors',
	];

	foreach ($tables as $table) {
		$wpdb->query("DROP TABLE IF EXISTS `{$table}`");
	}
}
