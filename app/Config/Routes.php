<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('/saludar', 'Home::saludar');

$routes->get('/saludar/(:alpha)', 'Home::saludar2/$1');

$routes->get('/saludar/(:alpha)/(:num)', 'Home::saludar3/$1/$2');

$routes->get('/operaciones/(:num)/(:num)/(:alpha)', 'Home::operaciones/$1/$2/$3'); 


//USUARIOS

$routes->get('/usuarios', 'UsuarioController::index'); 

$routes->get('/usuarios/(:num)', 'UsuarioController::show/$1'); 

$routes->get('/usuarios/create', 'UsuarioController::create'); 

$routes->post('/usuarios/store', 'UsuarioController::store');

$routes->get('/usuarios/(:num)/edit', 'UsuarioController::edit/$1'); 

$routes->post('/usuarios/(:num)/update', 'UsuarioController::update/$1'); 

$routes->get('/usuarios/(:num)/delete', 'UsuarioController::delete/$1'); 


$routes->get('/plantilla', 'home::plantilla'); 


$routes ->get('/login', 'UsuarioController::login');
$routes ->post('/login', 'UsuarioController::ValidarLogin');
$routes ->get('/logout', 'UsuarioController::logout');
$routes ->get('/plantilla', 'Home::plantilla');