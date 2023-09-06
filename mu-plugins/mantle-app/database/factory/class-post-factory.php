<?php
/**
 * Post Factory
 *
 * @package Mantle
 */

// phpcs:disable Squiz.Commenting.FunctionComment.MissingParamComment

namespace App\Database\Factory;

use Mantle\Support\Str;
use App\Models\Post;

/**
 * Post Factory
 *
 * @extends \Mantle\Database\Factory\Post_Factory<\App\Models\Post>
 */
class Post_Factory extends \Mantle\Database\Factory\Post_Factory {
	/**
	 * Model to use when creating objects.
	 *
	 * @var class-string<\Mantle\Database\Model\Model>
	 */
	protected string $model = Post::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array {
		return [
			'post_title'   => $this->faker->sentence(),
			'post_content' => trim( $this->faker->paragraph_blocks( 3 ) ),
			'post_status'  => 'publish',
			'post_type'    => 'post',
		];
	}
}
