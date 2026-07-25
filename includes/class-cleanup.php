<?php
/**
 * Data cleanup for Simple Analytics.
 *
 * @package SimpleAnalytics
 */

defined( 'ABSPATH' ) || exit;

class SA_Cleanup {

	public function __construct() {
		add_action( 'sa_cleanup_old_data', array( $this, 'cleanup' ) );

		if ( ! wp_next_scheduled( 'sa_cleanup_old_data' ) ) {
			wp_schedule_event( time(), 'daily', 'sa_cleanup_old_data' );
		}
	}

	public function cleanup() {
		global $wpdb;

		$retention = intval( get_option( 'sa_data_retention', 90 ) );
		$cutoff = gmdate( 'Y-m-d H:i:s', time() - ( $retention * DAY_IN_SECONDS ) );

		$events_table = SA_Database::table( 'events' );
		$sessions_table = SA_Database::table( 'sessions' );
		$heatmap_table = SA_Database::table( 'heatmap_data' );
		$replays_table = SA_Database::table( 'session_replays' );
		$conversions_table = SA_Database::table( 'conversions' );

		$wpdb->query( $wpdb->prepare( "DELETE FROM {$events_table} WHERE created_at < %s", $cutoff ) );
		$wpdb->query( $wpdb->prepare( "DELETE FROM {$sessions_table} WHERE started_at < %s", $cutoff ) );
		$wpdb->query( $wpdb->prepare( "DELETE FROM {$heatmap_table} WHERE created_at < %s", $cutoff ) );
		$wpdb->query( $wpdb->prepare( "DELETE FROM {$conversions_table} WHERE created_at < %s", $cutoff ) );

		$old_replays = $wpdb->get_col(
			$wpdb->prepare(
				"SELECT file_path FROM {$replays_table} WHERE created_at < %s",
				$cutoff
			)
		);

		foreach ( $old_replays as $filepath ) {
			if ( file_exists( $filepath ) ) {
				unlink( $filepath );
			}
		}

		$wpdb->query( $wpdb->prepare( "DELETE FROM {$replays_table} WHERE created_at < %s", $cutoff ) );

		$this->deactivate_inactive_sessions();
	}

	private function deactivate_inactive_sessions() {
		global $wpdb;

		$table = SA_Database::table( 'sessions' );
		$timeout = gmdate( 'Y-m-d H:i:s', time() - 300 );

		$wpdb->query(
			$wpdb->prepare(
				"UPDATE {$table} SET is_active = 0 WHERE is_active = 1 AND last_active_at < %s",
				$timeout
			)
		);
	}
}
