<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Admin
$routes->group('admin', static function ($routes) {
    $routes->get('/', 'Admin\Painel::index');
});
