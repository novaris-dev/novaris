<?php
/**
 * Novaris application bootstrap.
 *
 * This file serves as the main entry point for the Novaris application.
 * It loads Composer dependencies, creates the application instance,
 * boots the framework, handles the current request, and sends the
 * resulting response to the browser.
 *
 * @package Novaris
 */

use Novaris\Core\Application;

/*
|--------------------------------------------------------------------------
| Autoload
|--------------------------------------------------------------------------
|
| Load the Composer-generated autoloader. This makes the Novaris Framework
| and all other Composer-managed dependencies available to the application.
|
*/

require_once 'vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Create Application
|--------------------------------------------------------------------------
|
| Create the Novaris application instance using the current directory as
| the application base path. Once booted, the application can be accessed
| through the app() helper or the Novaris\App facade.
|
*/

/**
 * The Novaris application instance.
 *
 * @var Application $app
 */
$app = new Application( __DIR__ );

/*
|--------------------------------------------------------------------------
| Bootstrap Application
|--------------------------------------------------------------------------
|
| Boot the application and initialize the services and components required
| by Novaris to handle the current request.
|
*/

$app->boot();

/*
|--------------------------------------------------------------------------
| Run Application
|--------------------------------------------------------------------------
|
| Resolve the router from the service container, handle the current request,
| and send the generated response back to the client.
|
*/

$app->make( 'routing.router' )->response()->send();