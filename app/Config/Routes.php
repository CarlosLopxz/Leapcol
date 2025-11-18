<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contacto', 'Contacto::index');
$routes->get('/productos', 'Productos::index');
$routes->get('/productos/erp', 'Productos::erp');
$routes->get('/productos/crm', 'Productos::crm');
$routes->get('/productos/pos', 'Productos::pos');
$routes->get('/productos/ecommerce', 'Productos::ecommerce');
$routes->get('/sobre-nosotros', 'SobreNosotros::index');
