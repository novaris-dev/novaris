<?php
/**
 * Template configuration.
 *
 * Registers the template tags available to the Novaris template engine.
 *
 * @package   Novaris
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2026 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/novaris-dev/novaris
 */

use Novaris\Template\Tag\{
	Archives,
	Categories,
	RecentPosts,
};

return [
	'tags' => [
		'archives'     => Archives::class,
		'categories'   => Categories::class,
		'recent_posts' => RecentPosts::class,
	],
];