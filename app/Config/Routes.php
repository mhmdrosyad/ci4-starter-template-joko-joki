<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'AdminController::index', ['as' => 'dashboard']);

    // profile
    $routes->group('profile', function ($routes) {
        $routes->get('/', 'ProfileController::profile', ['as' => 'profile']);
        $routes->post('update/(:num)', 'ProfileController::update/$1', ['as' => 'update-profile']);
        $routes->post('change-password/(:num)', 'ProfileController::changePassword/$1', ['as' => 'change-password']);
    });
});


// route login register
$routes->group('auth', function ($routes) {
    $routes->get('register', 'AuthController::register');
    $routes->post('store', 'AuthController::store', ['as' => 'signup']);
    $routes->get('login', 'AuthController::login');
    $routes->post('authenticate', 'AuthController::authenticate', ['as' => 'authenticate']);
    $routes->get('logout', 'AuthController::logout', ['as' => 'logout']);
});
