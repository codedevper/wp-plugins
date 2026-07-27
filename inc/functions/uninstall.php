<?

/**
 * Uninstall hook – drop the table and remove the log directory.
 */
register_uninstall_hook(__FILE__, 'uninstall');
function uninstall()
{
	global $wpdb;

	$tables = [
		$wpdb->prefix . 'log_visitors',
	];

	foreach ($tables as $table) {
		$wpdb->query("DROP TABLE IF EXISTS `{$table}`");
	}
}
