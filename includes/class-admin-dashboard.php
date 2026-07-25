<?php
/**
 * Admin dashboard for Simple Analytics.
 *
 * @package SimpleAnalytics
 */

defined( 'ABSPATH' ) || exit;

class SA_Admin_Dashboard {

	public function __construct() {
		if ( ! is_admin() ) {
			return;
		}

		add_action( 'admin_menu', array( $this, 'add_menu' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'admin_init', array( $this, 'register_settings' ) );
	}

	public function add_menu() {
		add_menu_page(
			'Simple Analytics',
			'Simple Analytics',
			'manage_options',
			'simple-analytics',
			array( $this, 'render_dashboard' ),
			'dashicons-chart-bar',
			30
		);

		add_submenu_page(
			'simple-analytics',
			'Settings',
			'Settings',
			'manage_options',
			'simple-analytics-settings',
			array( $this, 'render_settings' )
		);
	}

	public function enqueue_scripts( $hook ) {
		if ( 'toplevel_page_simple-analytics' !== $hook && 'toplevel_page_simple-analytics-settings' !== $hook ) {
			return;
		}

		wp_enqueue_style(
			'sa-dashboard',
			SA_PLUGIN_URL . 'assets/css/admin-dashboard.css',
			array(),
			SA_VERSION
		);

		wp_enqueue_script(
			'chart-js',
			'https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js',
			array(),
			'4.4.0',
			true
		);

		wp_enqueue_script(
			'sa-dashboard-js',
			SA_PLUGIN_URL . 'assets/js/admin-dashboard.js',
			array( 'chart-js', 'wp-api-fetch' ),
			SA_VERSION,
			true
		);

		wp_enqueue_script(
			'sa-rrweb-player',
			SA_PLUGIN_URL . 'assets/js/vendor/rrweb-player.min.js',
			array(),
			SA_VERSION,
			true
		);

		wp_enqueue_script(
			'sa-rrweb',
			SA_PLUGIN_URL . 'assets/js/vendor/rrweb.min.js',
			array(),
			SA_VERSION,
			true
		);

		wp_enqueue_style(
			'sa-rrweb-player-css',
			SA_PLUGIN_URL . 'assets/css/rrweb-player.min.css',
			array(),
			SA_VERSION
		);

		wp_localize_script( 'sa-dashboard-js', 'saDashboard', array(
			'apiUrl' => esc_url_raw( rest_url( 'sa/v1/' ) ),
			'nonce'  => wp_create_nonce( 'wp_rest' ),
		) );
	}

	public function register_settings() {
		register_setting( 'sa_settings', 'sa_tracking_enabled' );
		register_setting( 'sa_settings', 'sa_replay_enabled' );
		register_setting( 'sa_settings', 'sa_sampling_rate' );
		register_setting( 'sa_settings', 'sa_replay_sample_rate' );
		register_setting( 'sa_settings', 'sa_exclude_roles', array( 'default' => array( 'administrator' ) ) );
		register_setting( 'sa_settings', 'sa_data_retention' );
	}

	public function render_dashboard() {
		include SA_PLUGIN_DIR . 'templates/dashboard.php';
	}

	public function render_settings() {
		$tracking_enabled = get_option( 'sa_tracking_enabled', '1' );
		$replay_enabled = get_option( 'sa_replay_enabled', '0' );
		$sampling_rate = get_option( 'sa_sampling_rate', 100 );
		$replay_sample_rate = get_option( 'sa_replay_sample_rate', 10 );
		$exclude_roles = get_option( 'sa_exclude_roles', array( 'administrator' ) );
		if ( ! is_array( $exclude_roles ) ) {
			$exclude_roles = array( 'administrator' );
		}
		$data_retention = get_option( 'sa_data_retention', 90 );

		$all_roles = wp_roles()->get_names();
		?>
		<div class="wrap">
			<h1>Simple Analytics Settings</h1>
			<form method="post" action="options.php">
				<?php settings_fields( 'sa_settings' ); ?>

				<table class="form-table">
					<tr>
						<th scope="row">Enable Tracking</th>
						<td>
							<label>
								<input type="checkbox" name="sa_tracking_enabled" value="1" <?php checked( $tracking_enabled, '1' ); ?> />
								Enable analytics tracking on frontend
							</label>
						</td>
					</tr>
					<tr>
						<th scope="row">Enable Session Recording</th>
						<td>
							<label>
								<input type="checkbox" name="sa_replay_enabled" value="1" <?php checked( $replay_enabled, '1' ); ?> />
								Enable session replay recording (requires rrweb)
							</label>
						</td>
					</tr>
					<tr>
						<th scope="row">Sampling Rate</th>
						<td>
							<input type="number" name="sa_sampling_rate" value="<?php echo esc_attr( $sampling_rate ); ?>" min="1" max="100" /> %
							<p class="description">Percentage of visitors to track (1-100)</p>
						</td>
					</tr>
					<tr>
						<th scope="row">Replay Sample Rate</th>
						<td>
							<input type="number" name="sa_replay_sample_rate" value="<?php echo esc_attr( $replay_sample_rate ); ?>" min="1" max="100" /> %
							<p class="description">Percentage of sessions to record (1-100)</p>
						</td>
					</tr>
					<tr>
						<th scope="row">Exclude User Roles</th>
						<td>
							<?php foreach ( $all_roles as $role_key => $role_name ) : ?>
								<label style="display: block; margin-bottom: 5px;">
									<input type="checkbox" name="sa_exclude_roles[]" value="<?php echo esc_attr( $role_key ); ?>"
										<?php checked( in_array( $role_key, $exclude_roles, true ) ); ?> />
									<?php echo esc_html( $role_name ); ?>
								</label>
							<?php endforeach; ?>
						</td>
					</tr>
					<tr>
						<th scope="row">Data Retention</th>
						<td>
							<input type="number" name="sa_data_retention" value="<?php echo esc_attr( $data_retention ); ?>" min="7" max="365" /> days
							<p class="description">Automatically delete data older than this (7-365 days)</p>
						</td>
					</tr>
				</table>

				<?php submit_button( 'Save Settings' ); ?>
			</form>

			<h2>Tracking Code</h2>
			<p>Tracking is automatic when the plugin is enabled. No manual code installation needed.</p>

			<h2>Conversion Tracking</h2>
			<p>Track conversions by adding this JavaScript event on your conversion pages:</p>
			<pre><code>// Track a conversion
saConvert('goal_name', 0.00);

// Track with UTM data
saConvert('purchase', 99.99, {
    product: 'Product Name',
    category: 'Category'
});</code></pre>
		</div>
		<?php
	}
}
