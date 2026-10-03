<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Security\CheckPhpIni;

/** @var RouteCollection $routes */
$env = getenv('CI_ENVIRONMENT') ?? 'production';
if (array_key_exists($env, ['dev', 'development', 'local'])) {
    $routes->get('/phpini', static fn () => CheckPhpIni::run(false));
}
