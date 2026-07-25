<?php
/**
 * Database management for Simple Analytics.
 *
 * @package SimpleAnalytics
 */

defined( 'ABSPATH' ) || exit;

class SA_Database {

	public static function activate() {
		self::create_tables();
		update_option( 'sa_db_version', SA_DB_VERSION );
	}

	public static function deactivate() {
		wp_clear_scheduled_hook( 'sa_cleanup_old_data' );
	}

	public static function create_tables() {
		global $wpdb;

		$charset_collate = $wpdb->get_charset_collate();

		$sessions = $wpdb->prefix . 'sa_sessions';
		$events = $wpdb->prefix . 'sa_events';
		$heatmap = $wpdb->prefix . 'sa_heatmap_data';
		$replays = $wpdb->prefix . 'sa_session_replays';
		$conversions = $wpdb->prefix . 'sa_conversions';

		$sql = "CREATE TABLE {$sessions} (
			id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
			session_id varchar(64) NOT NULL,
			visitor_id varchar(64) NOT NULL,
			user_id bigint(20) unsigned DEFAULT 0,
			ip_address varchar(45) NOT NULL,
			user_agent text NOT NULL,
			country varchar(2) DEFAULT '',
			city varchar(100) DEFAULT '',
			device_type varchar(20) DEFAULT 'desktop',
			browser varchar(50) DEFAULT '',
			os varchar(50) DEFAULT '',
			screen_width int(11) DEFAULT 0,
			screen_height int(11) DEFAULT 0,
			language varchar(10) DEFAULT '',
			referrer text DEFAULT '',
			entry_page text NOT NULL,
			utm_source varchar(255) DEFAULT '',
			utm_medium varchar(255) DEFAULT '',
			utm_campaign varchar(255) DEFAULT '',
			utm_term varchar(255) DEFAULT '',
			utm_content varchar(255) DEFAULT '',
			started_at datetime NOT NULL,
			last_active_at datetime NOT NULL,
			page_views int(11) DEFAULT 1,
			is_active tinyint(1) DEFAULT 1,
			PRIMARY KEY  (id),
			KEY session_id (session_id),
			KEY visitor_id (visitor_id),
			KEY started_at (started_at),
			KEY is_active (is_active),
			KEY utm_source (utm_source)
		) {$charset_collate};

		CREATE TABLE {$events} (
			id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
			session_id varchar(64) NOT NULL,
			event_type varchar(50) NOT NULL,
			event_name varchar(255) DEFAULT '',
			page_url text NOT NULL,
			page_title varchar(500) DEFAULT '',
			element_tag varchar(50) DEFAULT '',
			element_selector text DEFAULT '',
			element_text varchar(500) DEFAULT '',
			click_x int(11) DEFAULT 0,
			click_y int(11) DEFAULT 0,
			viewport_width int(11) DEFAULT 0,
			viewport_height int(11) DEFAULT 0,
			scroll_depth int(11) DEFAULT 0,
			meta longtext DEFAULT NULL,
			created_at datetime NOT NULL,
			PRIMARY KEY  (id),
			KEY session_id (session_id),
			KEY event_type (event_type),
			KEY created_at (created_at),
			KEY page_url (page_url(191))
		) {$charset_collate};

		CREATE TABLE {$heatmap} (
			id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
			session_id varchar(64) NOT NULL,
			page_url text NOT NULL,
			click_x int(11) NOT NULL,
			click_y int(11) NOT NULL,
			viewport_width int(11) NOT NULL,
			viewport_height int(11) NOT NULL,
			element_selector text DEFAULT '',
			device_type varchar(20) DEFAULT 'desktop',
			created_at datetime NOT NULL,
			PRIMARY KEY  (id),
			KEY page_url (page_url(191)),
			KEY created_at (created_at),
			KEY device_type (device_type)
		) {$charset_collate};

		CREATE TABLE {$replays} (
			id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
			session_id varchar(64) NOT NULL,
			visitor_id varchar(64) NOT NULL,
			page_url text NOT NULL,
			duration int(11) DEFAULT 0,
			events_count int(11) DEFAULT 0,
			file_path varchar(500) NOT NULL,
			file_size bigint(20) unsigned DEFAULT 0,
			device_type varchar(20) DEFAULT 'desktop',
			browser varchar(50) DEFAULT '',
			country varchar(2) DEFAULT '',
			started_at datetime NOT NULL,
			created_at datetime NOT NULL,
			PRIMARY KEY  (id),
			KEY session_id (session_id),
			KEY started_at (started_at)
		) {$charset_collate};

		CREATE TABLE {$conversions} (
			id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
			session_id varchar(64) NOT NULL,
			conversion_name varchar(255) NOT NULL,
			conversion_value decimal(10,2) DEFAULT 0.00,
			page_url text NOT NULL,
			utm_source varchar(255) DEFAULT '',
			utm_medium varchar(255) DEFAULT '',
			utm_campaign varchar(255) DEFAULT '',
			meta longtext DEFAULT NULL,
			created_at datetime NOT NULL,
			PRIMARY KEY  (id),
			KEY conversion_name (conversion_name),
			KEY created_at (created_at)
		) {$charset_collate};";

		require_once ABSPATH . 'wp-admin/includes/upgrade.php';
		dbDelta( $sql );

		update_option( 'sa_db_version', SA_DB_VERSION );

		$upload_dir = wp_upload_dir();
		$recordings_dir = $upload_dir['basedir'] . '/simple-analytics/recordings';
		if ( ! file_exists( $recordings_dir ) ) {
			wp_mkdir_p( $recordings_dir );
		}
	}

	public static function table( $name ) {
		global $wpdb;
		return $wpdb->prefix . 'sa_' . $name;
	}
}
