<?php
/**
 * REST API endpoints for Simple Analytics.
 *
 * @package SimpleAnalytics
 */

defined( 'ABSPATH' ) || exit;

class SA_REST_API {

	private $namespace = 'sa/v1';

	public function __construct() {
		add_action( 'rest_api_init', array( $this, 'register_routes' ) );
	}

	public function register_routes() {
		register_rest_route( $this->namespace, '/track', array(
			'methods'             => 'POST',
			'callback'            => array( $this, 'track_events' ),
			'permission_callback' => '__return_true',
		) );

		register_rest_route( $this->namespace, '/track/click', array(
			'methods'             => 'POST',
			'callback'            => array( $this, 'track_click' ),
			'permission_callback' => '__return_true',
		) );

		register_rest_route( $this->namespace, '/track/replay-chunk', array(
			'methods'             => 'POST',
			'callback'            => array( $this, 'track_replay_chunk' ),
			'permission_callback' => '__return_true',
		) );

		register_rest_route( $this->namespace, '/track/conversion', array(
			'methods'             => 'POST',
			'callback'            => array( $this, 'track_conversion' ),
			'permission_callback' => '__return_true',
		) );

		register_rest_route( $this->namespace, '/stats/overview', array(
			'methods'             => 'GET',
			'callback'            => array( $this, 'get_stats_overview' ),
			'permission_callback' => array( $this, 'check_admin_permission' ),
		) );

		register_rest_route( $this->namespace, '/stats/live', array(
			'methods'             => 'GET',
			'callback'            => array( $this, 'get_live_visitors' ),
			'permission_callback' => array( $this, 'check_admin_permission' ),
		) );

		register_rest_route( $this->namespace, '/stats/pages', array(
			'methods'             => 'GET',
			'callback'            => array( $this, 'get_top_pages' ),
			'permission_callback' => array( $this, 'check_admin_permission' ),
		) );

		register_rest_route( $this->namespace, '/stats/utm', array(
			'methods'             => 'GET',
			'callback'            => array( $this, 'get_utm_stats' ),
			'permission_callback' => array( $this, 'check_admin_permission' ),
		) );

		register_rest_route( $this->namespace, '/stats/conversions', array(
			'methods'             => 'GET',
			'callback'            => array( $this, 'get_conversion_stats' ),
			'permission_callback' => array( $this, 'check_admin_permission' ),
		) );

		register_rest_route( $this->namespace, '/stats/clicks', array(
			'methods'             => 'GET',
			'callback'            => array( $this, 'get_click_stats' ),
			'permission_callback' => array( $this, 'check_admin_permission' ),
		) );

		register_rest_route( $this->namespace, '/heatmap', array(
			'methods'             => 'GET',
			'callback'            => array( $this, 'get_heatmap_data' ),
			'permission_callback' => array( $this, 'check_admin_permission' ),
		) );

		register_rest_route( $this->namespace, '/replays', array(
			'methods'             => 'GET',
			'callback'            => array( $this, 'get_replays' ),
			'permission_callback' => array( $this, 'check_admin_permission' ),
		) );

		register_rest_route( $this->namespace, '/replay/(?P<id>\d+)', array(
			'methods'             => 'GET',
			'callback'            => array( $this, 'get_replay' ),
			'permission_callback' => array( $this, 'check_admin_permission' ),
		) );
	}

	public function check_admin_permission() {
		return current_user_can( 'manage_options' );
	}

	public function track_events( $request ) {
		global $wpdb;

		$body = $request->get_json_params();

		if ( empty( $body['events'] ) || ! is_array( $body['events'] ) ) {
			return new WP_Error( 'invalid_data', 'No events provided', array( 'status' => 400 ) );
		}

		$events_table = SA_Database::table( 'events' );
		$sessions_table = SA_Database::table( 'sessions' );
		$inserted = 0;

		foreach ( $body['events'] as $event ) {
			$session_id = sanitize_text_field( $event['session_id'] ?? '' );
			$event_type = sanitize_text_field( $event['type'] ?? 'pageview' );

			if ( empty( $session_id ) ) {
				continue;
			}

			$wpdb->insert(
				$events_table,
				array(
					'session_id'       => $session_id,
					'event_type'       => $event_type,
					'event_name'       => sanitize_text_field( $event['name'] ?? '' ),
					'page_url'         => esc_url_raw( $event['url'] ?? '' ),
					'page_title'       => sanitize_text_field( $event['title'] ?? '' ),
					'element_tag'      => sanitize_text_field( $event['element']['tag'] ?? '' ),
					'element_selector' => sanitize_text_field( $event['element']['selector'] ?? '' ),
					'element_text'     => mb_substr( sanitize_text_field( $event['element']['text'] ?? '' ), 0, 500 ),
					'click_x'          => intval( $event['click']['x'] ?? 0 ),
					'click_y'          => intval( $event['click']['y'] ?? 0 ),
					'viewport_width'   => intval( $event['viewport']['width'] ?? 0 ),
					'viewport_height'  => intval( $event['viewport']['height'] ?? 0 ),
					'scroll_depth'     => intval( $event['scroll_depth'] ?? 0 ),
					'meta'             => ! empty( $event['meta'] ) ? wp_json_encode( $event['meta'] ) : null,
					'created_at'       => current_time( 'mysql', true ),
				),
				array( '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%d', '%d', '%d', '%d', '%s', '%s' )
			);

			if ( $wpdb->insert_id ) {
				++$inserted;
			}

			if ( 'pageview' === $event_type ) {
				$existing = $wpdb->get_var(
					$wpdb->prepare(
						"SELECT id FROM {$sessions_table} WHERE session_id = %s",
						$session_id
					)
				);

				if ( ! $existing ) {
					$wpdb->insert(
						$sessions_table,
						array(
							'session_id'      => $session_id,
							'visitor_id'      => sanitize_text_field( $event['visitor_id'] ?? '' ),
							'ip_address'      => $this->get_client_ip(),
							'user_agent'      => sanitize_text_field( $event['user_agent'] ?? '' ),
							'device_type'     => sanitize_text_field( $event['device'] ?? 'desktop' ),
							'browser'         => sanitize_text_field( $event['browser'] ?? '' ),
							'os'              => sanitize_text_field( $event['os'] ?? '' ),
							'screen_width'    => intval( $event['viewport']['width'] ?? 0 ),
							'screen_height'   => intval( $event['viewport']['height'] ?? 0 ),
							'language'        => sanitize_text_field( $event['language'] ?? '' ),
							'referrer'        => esc_url_raw( $event['referrer'] ?? '' ),
							'entry_page'      => esc_url_raw( $event['url'] ?? '' ),
							'utm_source'      => sanitize_text_field( $event['utm']['utm_source'] ?? '' ),
							'utm_medium'      => sanitize_text_field( $event['utm']['utm_medium'] ?? '' ),
							'utm_campaign'    => sanitize_text_field( $event['utm']['utm_campaign'] ?? '' ),
							'utm_term'        => sanitize_text_field( $event['utm']['utm_term'] ?? '' ),
							'utm_content'     => sanitize_text_field( $event['utm']['utm_content'] ?? '' ),
							'started_at'      => current_time( 'mysql', true ),
							'last_active_at'  => current_time( 'mysql', true ),
							'page_views'      => 1,
							'is_active'       => 1,
						),
						array( '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%d' )
					);
				} else {
					$wpdb->query(
						$wpdb->prepare(
							"UPDATE {$sessions_table} SET page_views = page_views + 1, last_active_at = %s, is_active = 1 WHERE session_id = %s",
							current_time( 'mysql', true ),
							$session_id
						)
					);
				}
			}

			if ( 'heartbeat' === $event_type ) {
				$wpdb->query(
					$wpdb->prepare(
						"UPDATE {$sessions_table} SET last_active_at = %s, is_active = 1 WHERE session_id = %s",
						current_time( 'mysql', true ),
						$session_id
					)
				);
			}

		}

		return array( 'success' => true, 'inserted' => $inserted );
	}

	public function track_click( $request ) {
		global $wpdb;

		$body = $request->get_json_params();

		if ( empty( $body['clicks'] ) || ! is_array( $body['clicks'] ) ) {
			return new WP_Error( 'invalid_data', 'No clicks provided', array( 'status' => 400 ) );
		}

		$table = SA_Database::table( 'heatmap_data' );
		$inserted = 0;

		foreach ( $body['clicks'] as $click ) {
			$wpdb->insert(
				$table,
				array(
					'session_id'       => sanitize_text_field( $click['session_id'] ?? '' ),
					'page_url'         => esc_url_raw( $click['url'] ?? '' ),
					'click_x'          => intval( $click['x'] ?? 0 ),
					'click_y'          => intval( $click['y'] ?? 0 ),
					'viewport_width'   => intval( $click['viewport_width'] ?? 0 ),
					'viewport_height'  => intval( $click['viewport_height'] ?? 0 ),
					'element_selector' => sanitize_text_field( $click['selector'] ?? '' ),
					'device_type'      => sanitize_text_field( $click['device'] ?? 'desktop' ),
					'created_at'       => current_time( 'mysql', true ),
				),
				array( '%s', '%s', '%d', '%d', '%d', '%d', '%s', '%s', '%s' )
			);

			if ( $wpdb->insert_id ) {
				++$inserted;
			}
		}

		return array( 'success' => true, 'inserted' => $inserted );
	}

	public function track_replay_chunk( $request ) {
		global $wpdb;

		$body = $request->get_json_params();

		$session_id = sanitize_text_field( $body['session_id'] ?? '' );
		$visitor_id = sanitize_text_field( $body['visitor_id'] ?? '' );
		$events     = $body['events'] ?? array();

		if ( empty( $session_id ) || empty( $events ) ) {
			return new WP_Error( 'invalid_data', 'Invalid replay data', array( 'status' => 400 ) );
		}

		$upload_dir = wp_upload_dir();
		$replay_dir = $upload_dir['basedir'] . '/simple-analytics/recordings';

		if ( ! file_exists( $replay_dir ) ) {
			wp_mkdir_p( $replay_dir );
		}

		$filename = preg_replace( '/[^a-zA-Z0-9_-]/', '_', $session_id ) . '.json';
		$filepath = $replay_dir . '/' . $filename;

		$existing = array();
		if ( file_exists( $filepath ) ) {
			$existing = json_decode( file_get_contents( $filepath ), true ) ?? array();
		}

		$all_events = array_merge( $existing, $events );
		file_put_contents( $filepath, wp_json_encode( $all_events ) );

		$replays_table = SA_Database::table( 'session_replays' );

		$existing_replay = $wpdb->get_row(
			$wpdb->prepare(
				"SELECT id, events_count, duration FROM {$replays_table} WHERE session_id = %s ORDER BY id DESC LIMIT 1",
				$session_id
			)
		);

		if ( $existing_replay ) {
			$wpdb->update(
				$replays_table,
				array(
					'events_count' => count( $all_events ),
					'file_size'    => filesize( $filepath ),
					'duration'     => intval( $body['duration'] ?? 0 ),
				),
				array( 'id' => $existing_replay->id ),
				array( '%d', '%d', '%d' ),
				array( '%d' )
			);
		} else {
			$wpdb->insert(
				$replays_table,
				array(
					'session_id'   => $session_id,
					'visitor_id'   => $visitor_id,
					'page_url'     => esc_url_raw( $body['page_url'] ?? '' ),
					'duration'     => intval( $body['duration'] ?? 0 ),
					'events_count' => count( $all_events ),
					'file_path'    => $filepath,
					'file_size'    => filesize( $filepath ),
					'device_type'  => sanitize_text_field( $body['device'] ?? 'desktop' ),
					'browser'      => sanitize_text_field( $body['browser'] ?? '' ),
					'country'      => sanitize_text_field( $body['country'] ?? '' ),
					'started_at'   => sanitize_text_field( $body['started_at'] ?? current_time( 'mysql', true ) ),
					'created_at'   => current_time( 'mysql', true ),
				),
				array( '%s', '%s', '%s', '%d', '%d', '%s', '%d', '%s', '%s', '%s', '%s', '%s' )
			);
		}

		return array( 'success' => true );
	}

	public function track_conversion( $request ) {
		global $wpdb;

		$body = $request->get_json_params();

		$table = SA_Database::table( 'conversions' );

		$wpdb->insert(
			$table,
			array(
				'session_id'       => sanitize_text_field( $body['session_id'] ?? '' ),
				'conversion_name'  => sanitize_text_field( $body['name'] ?? '' ),
				'conversion_value' => floatval( $body['value'] ?? 0 ),
				'page_url'         => esc_url_raw( $body['url'] ?? '' ),
				'utm_source'       => sanitize_text_field( $body['utm_source'] ?? '' ),
				'utm_medium'       => sanitize_text_field( $body['utm_medium'] ?? '' ),
				'utm_campaign'     => sanitize_text_field( $body['utm_campaign'] ?? '' ),
				'meta'             => ! empty( $body['meta'] ) ? wp_json_encode( $body['meta'] ) : null,
				'created_at'       => current_time( 'mysql', true ),
			),
			array( '%s', '%s', '%f', '%s', '%s', '%s', '%s', '%s', '%s' )
		);

		return array( 'success' => true, 'id' => $wpdb->insert_id );
	}

	public function get_stats_overview( $request ) {
		global $wpdb;

		$period = sanitize_text_field( $request->get_param( 'period' ) ?: '24h' );
		$date_from = $this->get_date_from_period( $period );

		$sessions_table = SA_Database::table( 'sessions' );
		$events_table = SA_Database::table( 'events' );

		$total_visitors = (int) $wpdb->get_var(
			$wpdb->prepare(
				"SELECT COUNT(DISTINCT visitor_id) FROM {$sessions_table} WHERE started_at >= %s",
				$date_from
			)
		);

		$total_pageviews = (int) $wpdb->get_var(
			$wpdb->prepare(
				"SELECT COUNT(*) FROM {$events_table} WHERE event_type = 'pageview' AND created_at >= %s",
				$date_from
			)
		);

		$total_sessions = (int) $wpdb->get_var(
			$wpdb->prepare(
				"SELECT COUNT(*) FROM {$sessions_table} WHERE started_at >= %s",
				$date_from
			)
		);

		$single_page_sessions = (int) $wpdb->get_var(
			$wpdb->prepare(
				"SELECT COUNT(*) FROM {$sessions_table} WHERE started_at >= %s AND page_views = 1",
				$date_from
			)
		);

		$bounce_rate = $total_sessions > 0 ? round( ( $single_page_sessions / $total_sessions ) * 100, 1 ) : 0;

		$avg_duration = (int) $wpdb->get_var(
			$wpdb->prepare(
				"SELECT AVG(TIMESTAMPDIFF(SECOND, started_at, last_active_at)) FROM {$sessions_table} WHERE started_at >= %s",
				$date_from
			)
		);

		$avg_duration = $avg_duration ?: 0;
		$duration_min = floor( $avg_duration / 60 );
		$duration_sec = $avg_duration % 60;

		$prev_date_from = $this->get_date_from_period( $period, true );

		$prev_visitors = (int) $wpdb->get_var(
			$wpdb->prepare(
				"SELECT COUNT(DISTINCT visitor_id) FROM {$sessions_table} WHERE started_at >= %s AND started_at < %s",
				$prev_date_from,
				$date_from
			)
		);

		$prev_pageviews = (int) $wpdb->get_var(
			$wpdb->prepare(
				"SELECT COUNT(*) FROM {$events_table} WHERE event_type = 'pageview' AND created_at >= %s AND created_at < %s",
				$prev_date_from,
				$date_from
			)
		);

		$visitors_change = $prev_visitors > 0 ? round( ( ( $total_visitors - $prev_visitors ) / $prev_visitors ) * 100, 1 ) : 0;
		$pageviews_change = $prev_pageviews > 0 ? round( ( ( $total_pageviews - $prev_pageviews ) / $prev_pageviews ) * 100, 1 ) : 0;

		return array(
			'visitors'       => $total_visitors,
			'pageviews'      => $total_pageviews,
			'sessions'       => $total_sessions,
			'bounce_rate'    => $bounce_rate,
			'avg_duration'   => $duration_min . ':' . str_pad( $duration_sec, 2, '0', STR_PAD_LEFT ),
			'avg_duration_s' => $avg_duration,
			'visitors_change' => $visitors_change,
			'pageviews_change' => $pageviews_change,
		);
	}

	public function get_live_visitors( $request ) {
		global $wpdb;

		$table = SA_Database::table( 'sessions' );
		$timeout = gmdate( 'Y-m-d H:i:s', time() - 300 );

		$count = (int) $wpdb->get_var(
			$wpdb->prepare(
				"SELECT COUNT(*) FROM {$table} WHERE is_active = 1 AND last_active_at >= %s",
				$timeout
			)
		);

		$recent = $wpdb->get_results(
			$wpdb->prepare(
				"SELECT session_id, entry_page, device_type, browser, country, last_active_at
				FROM {$table} WHERE is_active = 1 AND last_active_at >= %s
				ORDER BY last_active_at DESC LIMIT 20",
				$timeout
			),
			ARRAY_A
		);

		return array(
			'count'   => $count,
			'visitors' => $recent,
		);
	}

	public function get_top_pages( $request ) {
		global $wpdb;

		$period = sanitize_text_field( $request->get_param( 'period' ) ?: '24h' );
		$date_from = $this->get_date_from_period( $period );
		$limit = intval( $request->get_param( 'limit' ) ?: 10 );

		$table = SA_Database::table( 'events' );

		$results = $wpdb->get_results(
			$wpdb->prepare(
				"SELECT page_url, page_title, COUNT(*) as views
				FROM {$table}
				WHERE event_type = 'pageview' AND created_at >= %s
				GROUP BY page_url
				ORDER BY views DESC
				LIMIT %d",
				$date_from,
				$limit
			),
			ARRAY_A
		);

		return array( 'pages' => $results ?: array() );
	}

	public function get_utm_stats( $request ) {
		global $wpdb;

		$period = sanitize_text_field( $request->get_param( 'period' ) ?: '24h' );
		$date_from = $this->get_date_from_period( $period );
		$group_by = sanitize_text_field( $request->get_param( 'group_by' ) ?: 'source' );

		$table = SA_Database::table( 'sessions' );

		$field = 'utm_source';
		if ( 'medium' === $group_by ) {
			$field = 'utm_medium';
		} elseif ( 'campaign' === $group_by ) {
			$field = 'utm_campaign';
		}

		$results = $wpdb->get_results(
			$wpdb->prepare(
				"SELECT {$field} as label, COUNT(DISTINCT visitor_id) as visitors, COUNT(*) as sessions
				FROM {$table}
				WHERE {$field} != '' AND started_at >= %s
				GROUP BY {$field}
				ORDER BY sessions DESC
				LIMIT 20",
				$date_from
			),
			ARRAY_A
		);

		return array( 'utm' => $results ?: array() );
	}

	public function get_conversion_stats( $request ) {
		global $wpdb;

		$period = sanitize_text_field( $request->get_param( 'period' ) ?: '24h' );
		$date_from = $this->get_date_from_period( $period );

		$table = SA_Database::table( 'conversions' );
		$sessions_table = SA_Database::table( 'sessions' );

		$total_conversions = (int) $wpdb->get_var(
			$wpdb->prepare(
				"SELECT COUNT(*) FROM {$table} WHERE created_at >= %s",
				$date_from
			)
		);

		$total_revenue = (float) $wpdb->get_var(
			$wpdb->prepare(
				"SELECT COALESCE(SUM(conversion_value), 0) FROM {$table} WHERE created_at >= %s",
				$date_from
			)
		);

		$goals = $wpdb->get_results(
			$wpdb->prepare(
				"SELECT conversion_name, COUNT(*) as count, SUM(conversion_value) as revenue
				FROM {$table}
				WHERE created_at >= %s
				GROUP BY conversion_name
				ORDER BY count DESC",
				$date_from
			),
			ARRAY_A
		);

		$daily = $wpdb->get_results(
			$wpdb->prepare(
				"SELECT DATE(created_at) as date, COUNT(*) as conversions, SUM(conversion_value) as revenue
				FROM {$table}
				WHERE created_at >= %s
				GROUP BY DATE(created_at)
				ORDER BY date ASC",
				$date_from
			),
			ARRAY_A
		);

		return array(
			'total'  => $total_conversions,
			'revenue' => $total_revenue,
			'goals'  => $goals ?: array(),
			'daily'  => $daily ?: array(),
		);
	}

	public function get_click_stats( $request ) {
		global $wpdb;

		$period = sanitize_text_field( $request->get_param( 'period' ) ?: '24h' );
		$date_from = $this->get_date_from_period( $period );

		$table = SA_Database::table( 'events' );

		$total_clicks = (int) $wpdb->get_var(
			$wpdb->prepare(
				"SELECT COUNT(*) FROM {$table} WHERE event_type = 'click' AND created_at >= %s",
				$date_from
			)
		);

		$top_elements = $wpdb->get_results(
			$wpdb->prepare(
				"SELECT element_selector, element_tag, COUNT(*) as clicks
				FROM {$table}
				WHERE event_type = 'click' AND element_selector != '' AND created_at >= %s
				GROUP BY element_selector
				ORDER BY clicks DESC
				LIMIT 20",
				$date_from
			),
			ARRAY_A
		);

		return array(
			'total_clicks' => $total_clicks,
			'top_elements' => $top_elements ?: array(),
		);
	}

	public function get_heatmap_data( $request ) {
		global $wpdb;

		$page_url = sanitize_text_field( $request->get_param( 'url' ) ?: '' );
		$device = sanitize_text_field( $request->get_param( 'device' ) ?: 'desktop' );
		$period = sanitize_text_field( $request->get_param( 'period' ) ?: '24h' );
		$date_from = $this->get_date_from_period( $period );

		$table = SA_Database::table( 'heatmap_data' );

		$where = "WHERE created_at >= %s";
		$params = array( $date_from );

		if ( ! empty( $page_url ) ) {
			$where .= " AND page_url = %s";
			$params[] = $page_url;
		}

		if ( 'all' !== $device ) {
			$where .= " AND device_type = %s";
			$params[] = $device;
		}

		$params[] = 5000;

		$results = $wpdb->get_results(
			$wpdb->prepare(
				"SELECT click_x, click_y, viewport_width, viewport_height
				FROM {$table}
				{$where}
				LIMIT %d",
				$params
			),
			ARRAY_A
		);

		return array( 'clicks' => $results ?: array() );
	}

	public function get_replays( $request ) {
		global $wpdb;

		$page = max( 1, intval( $request->get_param( 'page' ) ) );
		$per_page = min( 50, max( 1, intval( $request->get_param( 'per_page' ) ?: 20 ) ) );
		$offset = ( $page - 1 ) * $per_page;

		$table = SA_Database::table( 'session_replays' );

		$total = (int) $wpdb->get_var( "SELECT COUNT(*) FROM {$table}" );

		$results = $wpdb->get_results(
			$wpdb->prepare(
				"SELECT id, session_id, visitor_id, page_url, duration, events_count, file_size,
				device_type, browser, country, started_at, created_at
				FROM {$table}
				ORDER BY created_at DESC
				LIMIT %d OFFSET %d",
				$per_page,
				$offset
			),
			ARRAY_A
		);

		return array(
			'replays'    => $results ?: array(),
			'total'      => $total,
			'page'       => $page,
			'per_page'   => $per_page,
			'total_pages' => ceil( $total / $per_page ),
		);
	}

	public function get_replay( $request ) {
		global $wpdb;

		$id = intval( $request->get_param( 'id' ) );
		$table = SA_Database::table( 'session_replays' );

		$replay = $wpdb->get_row(
			$wpdb->prepare( "SELECT * FROM {$table} WHERE id = %d", $id ),
			ARRAY_A
		);

		if ( ! $replay ) {
			return new WP_Error( 'not_found', 'Replay not found', array( 'status' => 404 ) );
		}

		$filepath = $replay['file_path'];
		$events = array();

		if ( file_exists( $filepath ) ) {
			$raw = file_get_contents( $filepath );
			$events = json_decode( $raw, true ) ?? array();
		}

		$replay['events'] = $events;

		return $replay;
	}

	private function get_client_ip() {
		$keys = array( 'HTTP_X_FORWARDED_FOR', 'HTTP_X_REAL_IP', 'REMOTE_ADDR' );
		foreach ( $keys as $key ) {
			if ( ! empty( $_SERVER[ $key ] ) ) {
				$ip = explode( ',', sanitize_text_field( wp_unslash( $_SERVER[ $key ] ) ) );
				return trim( $ip[0] );
			}
		}
		return '127.0.0.1';
	}

	private function get_date_from_period( $period, $previous = false ) {
		$now = time();

		$offsets = array(
			'1h'  => HOUR_IN_SECONDS,
			'24h' => DAY_IN_SECONDS,
			'7d'  => DAY_IN_SECONDS * 7,
			'30d' => DAY_IN_SECONDS * 30,
			'90d' => DAY_IN_SECONDS * 90,
		);

		$seconds = $offsets[ $period ] ?? DAY_IN_SECONDS;

		if ( $previous ) {
			return gmdate( 'Y-m-d H:i:s', $now - ( $seconds * 2 ) );
		}

		return gmdate( 'Y-m-d H:i:s', $now - $seconds );
	}
}
