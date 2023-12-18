<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/institucional', 'Institucional::index');
$routes->get('/servico', 'Servico::index');
$routes->get('/areas-de-atuacao', 'Categorias::index');
$routes->get('/contato', 'Contato::index');
