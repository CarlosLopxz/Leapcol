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

// Rutas Admin
$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function($routes) {
    $routes->get('dashboard', 'Dashboard::index');
    $routes->get('productos', 'Productos::index');
    $routes->get('productos/crear', 'Productos::crear');
    $routes->post('productos/guardar', 'Productos::guardar');
    $routes->get('productos/editar/(:num)', 'Productos::editar/$1');
    $routes->post('productos/actualizar/(:num)', 'Productos::actualizar/$1');
    $routes->get('productos/eliminar/(:num)', 'Productos::eliminar/$1');
    $routes->get('categorias', 'Categorias::index');
    $routes->get('categorias/crear', 'Categorias::crear');
    $routes->post('categorias/guardar', 'Categorias::guardar');
    $routes->get('categorias/editar/(:num)', 'Categorias::editar/$1');
    $routes->get('categorias/eliminar/(:num)', 'Categorias::eliminar/$1');
});
