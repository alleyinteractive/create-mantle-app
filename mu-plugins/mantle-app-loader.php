<?php
/*
	Plugin Name: Mantle Loader
	Plugin URI: https://github.com/alleyinteractive/mantle
	Description: A plugin to automatically load the Mantle framework.
	Version: 0.1
	Author: Alley Interactive
	Author URI: http://www.alley.co/
*/

if ( function_exists( 'wpcom_vip_load_plugin' ) ) {
	wpcom_vip_load_plugin( 'mantle-app' );
} else {
	require_once __DIR__ . '/mantle-app/mantle.php';
}
