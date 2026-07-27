<?

/**
 * Register the REST API route.
 */
add_action( 'rest_api_init', 'register_routes_post_visitors' );
function register_routes_post_visitors() {
	register_rest_route( 'analytics/v1', '/visitors', array(
		'methods'             => 'POST',
		'callback'            => 'post_visitors',
		'permission_callback' => 'nonce_check_permission',
	) );
}
add_action( 'rest_api_init', 'register_routes_get_visitors' );
function register_routes_get_visitors() {
	register_rest_route( 'analytics/v1', '/visitors', array(
		'methods'             => 'GET',
		'callback'            => 'get_visitors',
		'permission_callback' => 'nonce_check_permission',
	) );
}
add_action( 'rest_api_init', 'register_routes_put_visitors' );
function register_routes_put_visitors() {
	register_rest_route( 'analytics/v1', '/visitors', array(
		'methods'             => 'PUT',
		'callback'            => 'get_visitors',
		'permission_callback' => 'nonce_check_permission',
	) );
}
add_action( 'rest_api_init', 'register_routes_delete_visitors' );
function register_routes_delete_visitors() {
	register_rest_route( 'analytics/v1', '/visitors', array(
		'methods'             => 'DELETE',
		'callback'            => 'get_visitors',
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
 * Handle the post_visitors.
 */
function post_visitors( WP_REST_Request $request ) {
	$params = $request->get_body();
    
	global $wpdb;
	$table_name = $wpdb->prefix . 'log_visitors';
    
	if ( $wpdb->last_error ) {
		return new WP_REST_Response( array( 'error' => $wpdb->last_error ), 500 );
	}
	
	return new WP_REST_Response( array( 'success' => true, 'params' => $params ), 201 );
}

/**
 * Handle the get_visitors.
 */
function get_visitors( WP_REST_Request $request ) {
	$params = $request->get_body();
    
	global $wpdb;
	$table_name = $wpdb->prefix . 'log_visitors';
    
	if ( $wpdb->last_error ) {
		return new WP_REST_Response( array( 'error' => $wpdb->last_error ), 500 );
	}
	
	return new WP_REST_Response( array( 'success' => true, 'params' => $params ), 201 );
}

/**
 * Handle the put_visitors.
 */
function put_visitors( WP_REST_Request $request ) {
	$params = $request->get_body();
    
	global $wpdb;
	$table_name = $wpdb->prefix . 'log_visitors';
    
	if ( $wpdb->last_error ) {
		return new WP_REST_Response( array( 'error' => $wpdb->last_error ), 500 );
	}
	
	return new WP_REST_Response( array( 'success' => true, 'params' => $params ), 201 );
}

/**
 * Handle the delete_visitors.
 */
function delete_visitors( WP_REST_Request $request ) {
	$params = $request->get_body();
    
	global $wpdb;
	$table_name = $wpdb->prefix . 'log_visitors';
    
	if ( $wpdb->last_error ) {
		return new WP_REST_Response( array( 'error' => $wpdb->last_error ), 500 );
	}
	
	return new WP_REST_Response( array( 'success' => true, 'params' => $params ), 201 );
}
