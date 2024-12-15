<?php
/*
	Plugin Name: Composer Loader
	Plugin URI: https://github.com/alleyinteractive/
	Description: A plugin to automatically load Composer dependencies.
	Version: 0.1
	Author: Alley Interactive
	Author URI: http://www.alley.co/
*/

$composer_file = dirname( __DIR__ ) . '/vendor/wordpress-autoload.php';

if ( ! file_exists( $composer_file ) ) {
	add_action(
		'admin_notices',
		function() {
			printf(
				'<div class="notice notice-error"><p>%s</p></div>',
				esc_html__( 'Composer dependencies are not installed. Run `composer install` to install them.', 'mantle' )
			);
		}
	);

	return;
} else {
	require_once $composer_file;
}
