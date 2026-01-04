<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/contacto', 'Contacto::index');
$routes->post('/contacto/enviar', 'Contacto::enviar');
$routes->get('/productos', 'Productos::index');
$routes->get('/productos/detalle/(:num)', 'Productos::detalle/$1');
$routes->get('/productos/erp', 'Productos::erp');
$routes->get('/productos/crm', 'Productos::crm');
$routes->get('/productos/pos', 'Productos::pos');
$routes->get('/productos/ecommerce', 'Productos::ecommerce');
$routes->get('/sobre-nosotros', 'SobreNosotros::index');
$routes->get('/prueba-gratis', 'PruebaGratis::index');
$routes->get('/prueba-gratis/(:num)', 'PruebaGratis::index/$1');
$routes->get('/prueba-gratis/activar/(:num)', 'PruebaGratis::activar/$1');
$routes->get('/prueba-gratis/cancelar/(:num)', 'PruebaGratis::cancelar/$1');
$routes->post('/telegram/send', 'Telegram::sendMessage');
$routes->get('/telegram/messages', 'Telegram::getMessages');

// Rutas de autenticación
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::authenticate');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::store');
$routes->get('/auth/google', 'AuthController::googleLogin');
$routes->get('/auth/google/callback', 'AuthController::googleCallback');

// Rutas de sistemas
$routes->get('/sistema/login', 'SistemaController::login');
$routes->get('/sistema/cambiar-password', 'SistemaController::cambiarPassword');
$routes->get('/sistema/dashboard', 'SistemaController::dashboard');
$routes->get('/sistema/(:num)', 'SistemaController::index/$1');

// Rutas del Sistema de Inventario
$routes->get('/inventario/login', 'Sistemas\InventarioController::login');
$routes->post('/inventario/authenticate', 'Sistemas\InventarioController::authenticate');
$routes->get('/inventario/dashboard', 'Sistemas\InventarioController::dashboard', ['filter' => 'inventario']);
$routes->get('/inventario/logout', 'Sistemas\InventarioController::logout');

// Rutas de compra
$routes->get('/compra/(:num)', 'CompraController::index/$1');
$routes->post('/compra/procesar', 'CompraController::procesar');

// Rutas de dashboards
$routes->get('/cliente/dashboard', 'ClienteController::dashboard', ['filter' => 'auth']);
$routes->get('/admin/dashboard', 'AdminController::dashboard', ['filter' => 'admin']);

// Rutas Admin
$routes->group('admin', ['namespace' => 'App\Controllers\Admin', 'filter' => 'admin'], function ($routes) {
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

    // Rutas de Usuarios
    $routes->get('usuarios', 'Usuarios::index');
    $routes->get('usuarios/crear', 'Usuarios::crear');
    $routes->post('usuarios/guardar', 'Usuarios::guardar');
    $routes->get('usuarios/editar/(:num)', 'Usuarios::editar/$1');
    $routes->post('usuarios/actualizar/(:num)', 'Usuarios::actualizar/$1');
    $routes->get('usuarios/eliminar/(:num)', 'Usuarios::eliminar/$1');
    
    // Rutas de Pruebas Gratis
    $routes->get('pruebas-gratis', 'PruebasGratis::index');
    $routes->get('pruebas-gratis/cancelar/(:num)', 'PruebasGratis::cancelar/$1');
    
    // Rutas de Ventas
    $routes->get('ventas', 'Ventas::index');
});
