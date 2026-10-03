<?php

use CodeIgniter\Router\RouteCollection;

// silence is golden

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/users', 'UserController::index');
