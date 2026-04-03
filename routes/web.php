<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

/*
|--------------------------------------------------------------------------
| User CRUD (Site 1)
|--------------------------------------------------------------------------
*/
$router->get('/users', 'UserController@getUsers');
$router->post('/users', 'UserController@add');
$router->get('/users/{id}', 'UserController@show');     
$router->delete('/users/{id}', 'UserController@delete');
$router->put('/users/{id}', 'UserController@update');

/*
|--------------------------------------------------------------------------
| Rentals CRUD (Site 2)
|--------------------------------------------------------------------------
*/
$router->get('/rentals', 'RentalController@index');          // Get all rentals
$router->post('/rentals', 'RentalController@store');         // Add a rental
$router->get('/rentals/{id}', 'RentalController@show');      // Get single rental
$router->put('/rentals/{id}', 'RentalController@update');    // Update rental
$router->delete('/rentals/{id}', 'RentalController@destroy');// Delete rental



$router->get('/products', 'ProductController@getProducts');
$router->post('/products', 'ProductController@add');
$router->get('/products/{id}', 'ProductController@show');
$router->put('/products/{id}', 'ProductController@update');
$router->delete('/products/{id}', 'ProductController@delete');