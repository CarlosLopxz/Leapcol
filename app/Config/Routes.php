<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/contacto', 'Contacto::index');
$routes->get('/productos', 'Productos::index');
$routes->get('/productos/erp', 'Productos::erp');
$routes->get('/productos/crm', 'Productos::crm');
$routes->get('/productos/pos', 'Productos::pos');
$routes->get('/productos/ecommerce', 'Productos::ecommerce');
$routes->get('/sobre-nosotros', 'SobreNosotros::index');

// Rutas de autenticación
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::authenticate');
$routes->get('/logout', 'AuthController::logout');

// Rutas de dashboards
$routes->get('/cliente/dashboard', 'ClienteController::dashboard');
$routes->get('/admin/dashboard', 'AdminController::dashboard');
