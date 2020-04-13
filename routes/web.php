<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/examples', 'ExampleController@index');
$router->post('/examples', 'ExampleController@store');
$router->get('/examples/{id}', 'ExampleController@show');
$router->put('/examples/{id}', 'ExampleController@update');
$router->delete('/examples/{id}', 'ExampleController@destroy');
