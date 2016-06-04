<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$app->get('/', 'HomeController@index');

$app->get('/about', function() use ($app){

    $data = [
        'Author'    => 'Nick B. Palomino',
        'Key'       => env('APP_KEY'),
        'Environment'=> app()->environment(),
        'App Filesystem(file)'  => config('app.filesystem.motor'),
        'App Filesystem(array)' => config('filesystem.motor'),
        'Version'   => $app->version()
    ];

    return $data;
});
