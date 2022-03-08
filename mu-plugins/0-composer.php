<?php
/*
	Plugin Name: Composer Loader
	Plugin URI: https://github.com/alleyinteractive/
	Description: A plugin to automatically load Composer dependencies.
	Version: 0.1
	Author: Alley Interactive
	Author URI: http://www.alley.co/
*/

if ( ! file_exists( WP_CONTENT_DIR . '/vendor/wordpress-autoload.php' ) ) {
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
	require_once WP_CONTENT_DIR . '/vendor/wordpress-autoload.php';
}
