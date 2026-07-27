<?

/**
 * Register the REST API route.
 */
add_action( 'rest_api_init', 'register_routes_post_events' );
function register_routes_post_events() {
	register_rest_route( 'analytics/v1', '/events', array(
		'methods'             => 'POST',
		'callback'            => 'post_events',
		'permission_callback' => 'nonce_check_permission',
	) );
}
add_action( 'rest_api_init', 'register_routes_get_events' );
function register_routes_get_events() {
	register_rest_route( 'analytics/v1', '/events', array(
		'methods'             => 'GET',
		'callback'            => 'get_events',
		'permission_callback' => 'nonce_check_permission',
	) );
}
add_action( 'rest_api_init', 'register_routes_put_events' );
function register_routes_put_events() {
	register_rest_route( 'analytics/v1', '/events', array(
		'methods'             => 'PUT',
		'callback'            => 'get_events',
		'permission_callback' => 'nonce_check_permission',
	) );
}
add_action( 'rest_api_init', 'register_routes_delete_events' );
function register_routes_delete_events() {
	register_rest_route( 'analytics/v1', '/events', array(
		'methods'             => 'DELETE',
		'callback'            => 'get_events',
		'permission_callback' => 'nonce_check_permission',
	) );
}

/**
 * Permission callback – verify the WP nonce.
 */
function nonce_check_permission( WP_REST_Request $request ): bool {
	$nonce = $request->get_header( 'X-WP-Nonce' );
	return wp_verify_nonce($nonce, 'wp_rest');
}

/**
 * Handle the post_events.
 */
function post_events( WP_REST_Request $request ) {
	$params = $request->get_body();
    
	global $wpdb;
	$table_name = $wpdb->prefix . 'log_events';
    
	if ( $wpdb->last_error ) {
		return new WP_REST_Response( array( 'error' => $wpdb->last_error ), 500 );
	}
	
	return new WP_REST_Response( array( 'success' => true, 'params' => $params ), 201 );
}

/**
 * Handle the get_events.
 */
function get_events( WP_REST_Request $request ) {
	$params = $request->get_body();
    
	global $wpdb;
	$table_name = $wpdb->prefix . 'log_events';
    
	if ( $wpdb->last_error ) {
		return new WP_REST_Response( array( 'error' => $wpdb->last_error ), 500 );
	}
	
	return new WP_REST_Response( array( 'success' => true, 'params' => $params ), 201 );
}

/**
 * Handle the put_events.
 */
function put_events( WP_REST_Request $request ) {
	$params = $request->get_body();
    
	global $wpdb;
	$table_name = $wpdb->prefix . 'log_events';
    
	if ( $wpdb->last_error ) {
		return new WP_REST_Response( array( 'error' => $wpdb->last_error ), 500 );
	}
	
	return new WP_REST_Response( array( 'success' => true, 'params' => $params ), 201 );
}

/**
 * Handle the delete_events.
 */
function delete_events( WP_REST_Request $request ) {
	$params = $request->get_body();
    
	global $wpdb;
	$table_name = $wpdb->prefix . 'log_events';
    
	if ( $wpdb->last_error ) {
		return new WP_REST_Response( array( 'error' => $wpdb->last_error ), 500 );
	}
	
	return new WP_REST_Response( array( 'success' => true, 'params' => $params ), 201 );
}
