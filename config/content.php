<?php
/**
 * Content configuration for Novaris.
 *
 * This configuration file defines how blog posts and categories are structured and managed 
 * within the Novaris. The settings below specify content paths, taxonomy rules, and 
 * URL routing for posts and categories.
 *
 * @package   Novaris
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2024 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/novaris-dev/framework
 */


return [

	// Create custom content type and taxonomy for blog posts.
	'post' => [
		'path'       => 'blog',
		'collection' => [ 'order' => 'desc' ],
	],
	'category' => [
		'path'            => 'category',
		'collection'      => [ 'number' => 9999 ],
		'taxonomy'        => true,
		'term_collect'    => 'post',
		'term_collection' => [ 'order' => 'desc' ],
	]
];