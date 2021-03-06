<?php
/**
 * Asset Configuration
 *
 * @package Mantle
 */

return [

	/*
	|--------------------------------------------------------------------------
	| Asset Folder
	|--------------------------------------------------------------------------
	|
	| Specify the folder that built assets live in. This defaults to `build/` but
	| can be customized to any other path. Updates here need to match the
	| `setPublicPath()` configuration in `webpack.mix.js`.
	|
	*/
	'path' => env( 'ASSET_BUILD_PATH', 'build' ),

	/*
	|--------------------------------------------------------------------------
	| Asset URL
	|--------------------------------------------------------------------------
	|
	| This URL is used to properly generate the URL to built assets.
	*/
	'url'  => env( 'ASSET_BUILD_URL', null ),
];
