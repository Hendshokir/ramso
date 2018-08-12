<?php

function only_allow_logged_in_rest_access( $access ) {

    if(strpos($_SERVER['REQUEST_URI'], 'clear-cache') === false){
        return new WP_Error( 'rest_cannot_access', __( 'Only authenticated users can access the REST API.', 'disable-json-api' ), array( 'status' => rest_authorization_required_code() ) );
    }
    return $access;
}
add_filter('rest_authentication_errors', 'only_allow_logged_in_rest_access');

add_action('rest_api_init', function () {
    register_rest_route('wp/v2', '/clear-cache', array(
        'methods' => 'GET',
        'callback' => 'clear_cache',
    ) );
} );

function clear_cache( $data ) {
    rocket_clean_home();
    return true;
}
