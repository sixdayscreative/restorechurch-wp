<?php

/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'restoreproject_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/CMB2/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */


 if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
 	require_once dirname( __FILE__ ) . '/cmb2/init.php';
 } elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
 	require_once dirname( __FILE__ ) . '/CMB2/init.php';
 }


 /**
  * Only show this box in the CMB2 REST API if the user is logged in.
  *
  * @param  bool                 $is_allowed     Whether this box and its fields are allowed to be viewed.
  * @param  CMB2_REST_Controller $cmb_controller The controller object.
  *                                              CMB2 object available via `$cmb_controller->rest_box->cmb`.
  *
  * @return bool                 Whether this box and its fields are allowed to be viewed.
  */


 function restoreproject_limit_rest_view_to_logged_in_users( $is_allowed, $cmb_controller ) {
 	if ( ! is_user_logged_in() ) {
 		$is_allowed = false;
 	}

 	return $is_allowed;
 }




add_action( 'cmb2_init', 'restoreproject_register_home_rest_api_box' );

function restoreproject_register_home_rest_api_box(){
  $prefix = 'restoreproject_home_';

  $cmb_home = new_cmb2_box( array(
    'id'            => $prefix . 'metabox',
    'title'         => esc_html__( 'Home Address Details', 'home'),
    'object_types'  => array( 'home' ),
    'show_in_rest'  => WP_REST_Server::ALLMETHODS,
    'get_box_permissions_check_cb' => 'restoreproject_limit_rest_view_to_logged_in_users',
  ));

  $cmb_home->add_field( array(
		'name' => esc_html__( 'Address Line 1', 'cmb2' ),
		'id'   => $prefix . 'home_address_1',
		'type' => 'text_medium',
	) );

  $cmb_home->add_field( array(
		'name' => esc_html__( 'Address Line 2', 'cmb2' ),
		'id'   => $prefix . 'home_address_2',
		'type' => 'text_medium',
	) );

  $cmb_home->add_field( array(
		'name' => esc_html__( 'Area', 'cmb2' ),
		'id'   => $prefix . 'home_area',
		'type' => 'text_medium',
	) );

  $cmb_home->add_field( array(
		'name' => esc_html__( 'City', 'cmb2' ),
		'id'   => $prefix . 'home_city',
		'type' => 'text_medium',
	) );

  $cmb_home->add_field( array(
		'name' => esc_html__( 'Postcode', 'cmb2' ),
		'id'   => $prefix . 'home_postcode',
		'type' => 'text_medium',
	) );
}
