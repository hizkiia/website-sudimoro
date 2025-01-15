<?php

namespace Config;

use App\Controllers\GalleryController;

$routes = Services::routes();

$routes->get('/', 'Home::index');

$routes->get('/login', 'AuthController::login');
$routes->post('/auth/login', 'AuthController::loginAuth');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/galeri', 'Galeri::index');
$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/galeri/create', 'Galeri::create');
    $routes->post('/galeri/store', 'Galeri::store');
    $routes->get('/galeri/edit/(:num)', 'Galeri::edit/$1');
    $routes->post('/galeri/update/(:num)', 'Galeri::update/$1');
    $routes->post('/galeri/delete/(:num)', 'Galeri::delete/$1');
});


$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/berita/create', 'BeritaController::create');
    $routes->post('/berita/store', 'BeritaController::store');
    $routes->get('/berita/edit/(:num)', 'BeritaController::edit/$1');
    $routes->post('/berita/update/(:num)', 'BeritaController::update/$1');
    $routes->get('/berita/delete/(:num)', 'BeritaController::delete/$1');
});

$routes->get('/berita', 'BeritaController::index');
$routes->get('/hubungi', 'ContactController::index');


$routes->get('/umkm', 'UmkmController::index');
