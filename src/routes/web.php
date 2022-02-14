<?php

use Laravel\Lumen\Routing\Router;

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

/** @var Router $router */
$router->group(['prefix' => '/api'], function() use ($router) {
    $router->group(['prefix' => '/series'], function() use ($router) {
        $router->get('/', 'SeriesController@index');
        $router->get('/{id}', 'SeriesController@show');
        $router->post('/create', 'SeriesController@create');
        $router->put('/{id}', 'SeriesController@update');
        $router->delete('/{id}', 'SeriesController@destroy');
    });
});
