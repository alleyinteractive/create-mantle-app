<?php
/**
 * Application Configuration
 *
 * @package Mantle
 */

return [

	/*
	|--------------------------------------------------------------------------
	| Application Debug Mode
	|--------------------------------------------------------------------------
	|
	| Enable detailed error messages with stack traces will be shown on every error
	| that occurs within your application. If disabled, a simple generic error page
	| is shown.
	|
	*/
	'debug' => environment( 'APP_DEBUG', defined( 'WP_DEBUG' ) && WP_DEBUG ),

	/*
	|--------------------------------------------------------------------------
	| Application Service Providers
	|--------------------------------------------------------------------------
	|
	| Providers listed here will be autoloaded for every request on the application.
	| The providers listed here will be merged with the default framework providers.
	|
	 */
	'providers' => [
		App\Providers\App_Service_Provider::class,
		App\Providers\Asset_Service_Provider::class,
		App\Providers\Event_Service_Provider::class,
	],

	/*
	|--------------------------------------------------------------------------
	| Application Aliases
	|--------------------------------------------------------------------------
	|
	| These are aliases that will be available to the entire application without
	| the need use the proper namespace.
	|
	 */
	'aliases'   => [
		'App'     => Mantle\Facade\App::class,
		'Cache'   => Mantle\Facade\Cache::class,
		'Config'  => Mantle\Facade\Config::class,
		'Event'   => Mantle\Facade\Event::class,
		'Log'     => Mantle\Facade\Log::class,
		'Queue'   => Mantle\Facade\Queue::class,
		'Request' => Mantle\Facade\Request::class,
		'Route'   => Mantle\Facade\Route::class,
		'View'    => Mantle\Facade\View::class,
		'Storage' => Mantle\Facade\Storage::class,
	],

	/*
	|--------------------------------------------------------------------------
	| Application Namespace
	|--------------------------------------------------------------------------
	|
	| Used to provide a configurable namespace for class generation.
	|
	*/
	'namespace' => environment( 'APP_NAMESPACE', 'App' ),

	/*
	|--------------------------------------------------------------------------
	| Application Text Domain
	|--------------------------------------------------------------------------
	|
	| The text domain used by Mantle when scaffolding files with translatable
	| strings.
	|
	*/
	'i18n_domain' => environment( 'APP_I18N_DOMAIN', 'mantle' ),
];
