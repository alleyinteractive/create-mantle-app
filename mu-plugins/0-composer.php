<?php
/*
	Plugin Name: Composer Loader
	Plugin URI: https://github.com/alleyinteractive
	Description: A plugin to automatically load Composer dependencies.
	Version: 0.1
	Author: Alley Interactive
	Author URI: http://www.alley.co/
*/

namespace Alley\Composer;

// Load the composer autoloader from the wp-content folder.
$composer_file = WP_CONTENT_DIR . '/vendor/autoload.php';

if ( file_exists( $composer_file ) ) {
	require_once $composer_file; // phpcs:ignore WordPressVIPMinimum.Files.IncludingFile.UsingVariable
	define( 'Alley\Composer\LOADED', true );
} else {
	// Include an error notice.
	add_action(
		'admin_notices',
		function() {
			if ( ! defined( 'VIP_GO_ENV' ) || ! \VIP_GO_ENV ) {
				printf(
					'<div class="notice notice-error"><p>%s</p></div>',
					esc_html__( 'Composer needs to be installed for the site.', 'ai' )
				);
			} else {
				printf(
					'<div class="notice notice-error"><p>%s</p></div>',
					esc_html__( 'Something is wrong! Composer is missing.', 'ai' )
				);
			}
		}
	);
}

/**
 * Determine if Composer is loaded.
 *
 * @return bool
 */
function is_composer_loaded(): bool {
	return defined( 'Alley\Composer\LOADED' ) && LOADED;
}
