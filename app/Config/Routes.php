<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');
// $routes->post('/dashboard', 'Home::dashboard');
$routes->post('/upload', 'Home::upload/$1');
$routes->get('/upload', 'Home::upload');
$routes->post('/save', 'Home::save');
