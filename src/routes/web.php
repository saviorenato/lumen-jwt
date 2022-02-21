<?php

use Laravel\Lumen\Routing\Router;
use App\Http\Middleware\JwtMiddleware;

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

    $router->post('auth', 'AuthController@authenticate');

    $router->group(['prefix' => '/users', 'middleware' => JwtMiddleware::class], function() use ($router) {
        $router->get('/', 'UsersController@index');
        $router->get('/{id}', 'UsersController@show');
        $router->post('/create', 'UsersController@create');
        $router->put('/{id}', 'UsersController@update');
        $router->delete('/{id}', 'UsersController@destroy');
    });

});
