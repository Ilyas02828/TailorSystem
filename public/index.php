<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

// $exp_date ="25-01-2019";
// $todays_date = date("d-m-Y");
// $today = strtotime($todays_date);
// // dd($today);
// $expiration_date = strtotime($exp_date);
// if ($expiration_date <= $today)
// {
// echo "<!DOCTYPE HTML PUBLIC “-//IETF//DTD HTML 2.0//EN”>
// <html>
// <head>
// <title>Expired…</title>
// </head>
// <body>
// <h1>What you search</h1>
// <p>Now Site is Expired </p>
// <hr>
// <address>I have set the expiration to my site ,we need to increase expiration date in index page</address>
// </body>
// </html>";
// exit();
// }
/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
