<?php
// $exp_date ="23-01-2020";
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
// <address>The Project Trail version is expired . For more deatils Visit us:
//  ISI SOFTWARE SOLUTION <br>OR Contact on:+92-333-9739504</address>

// </body>
// </html>";
// exit();
// }
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

// Hi i am trying to update the github repositry through phpstorm

//,/m,/.m./
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
