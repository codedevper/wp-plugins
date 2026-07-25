<?php
/**
 * Frontend tracker for Simple Analytics.
 *
 * @package SimpleAnalytics
 */

defined( 'ABSPATH' ) || exit;

class SA_Frontend_Tracker {

	public function __construct() {
		if ( is_admin() ) {
			return;
		}

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}

	public function enqueue_scripts() {
		if ( ! $this->is_tracking_enabled() ) {
			return;
		}

		wp_enqueue_script(
			'sa-tracker',
			SA_PLUGIN_URL . 'assets/js/tracker.js',
			array(),
			SA_VERSION,
			true
		);

		wp_enqueue_script(
			'sa-heatmap',
			SA_PLUGIN_URL . 'assets/js/heatmap.js',
			array( 'sa-tracker' ),
			SA_VERSION,
			true
		);

		$config = array(
			'apiUrl'         => esc_url_raw( rest_url( 'sa/v1/' ) ),
			'nonce'          => wp_create_nonce( 'wp_rest' ),
			'sessionTimeout' => 30,
			'samplingRate'   => $this->get_sampling_rate(),
			'recordReplay'   => $this->should_record_replay(),
			'replaySample'   => $this->get_replay_sample_rate(),
		);

		wp_localize_script( 'sa-tracker', 'saConfig', $config );

		if ( $this->should_record_replay() ) {
			wp_enqueue_script(
				'sa-rrweb',
				SA_PLUGIN_URL . 'assets/js/vendor/rrweb.min.js',
				array(),
				SA_VERSION,
				true
			);

			wp_enqueue_script(
				'sa-replay-recorder',
				SA_PLUGIN_URL . 'assets/js/replay-recorder.js',
				array( 'sa-tracker', 'sa-rrweb' ),
				SA_VERSION,
				true
			);
		}
	}

	private function is_tracking_enabled() {
		$option = get_option( 'sa_tracking_enabled', '1' );
		if ( '0' === $option ) {
			return false;
		}

		if ( $this->is_excluded_user() ) {
			return false;
		}

		if ( ! empty( $_SERVER['HTTP_DNT'] ) && '1' === $_SERVER['HTTP_DNT'] ) {
			return false;
		}

		return true;
	}

	private function is_excluded_user() {
		if ( ! is_user_logged_in() ) {
			return false;
		}

		$excluded_roles = get_option( 'sa_exclude_roles', array( 'administrator' ) );
		$user = wp_get_current_user();

		return ! empty( array_intersect( $excluded_roles, $user->roles ) );
	}

	private function get_sampling_rate() {
		return intval( get_option( 'sa_sampling_rate', 100 ) );
	}

	private function should_record_replay() {
		return '1' === get_option( 'sa_replay_enabled', '0' );
	}

	private function get_replay_sample_rate() {
		return intval( get_option( 'sa_replay_sample_rate', 10 ) );
	}
}
