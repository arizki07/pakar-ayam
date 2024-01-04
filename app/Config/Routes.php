<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * -----------------------------------------------p---------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'Landing_page::index');

// route admin
$routes->get('/admin/login', 'LoginController::index');
$routes->post('/login', 'LoginController::processLogin');
$routes->get('/logout', 'LoginController::logout');

$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'Dashboard::index');

    // route gejala
    $routes->get('gejala', 'Gejala::index');
    $routes->get('gejala/add', 'Gejala::create');
    $routes->post('gejala/store', 'Gejala::store');
    $routes->get('gejala/edit/(:num)', 'Gejala::edit/$1');
    $routes->post('gejala/update/(:num)', 'Gejala::update/$1');
    $routes->get('gejala/delete/(:num)', 'Gejala::delete/$1');

    // route penyakit
    $routes->get('penyakit', 'Penyakit::index');
    $routes->get('penyakit/add', 'Penyakit::create');
    $routes->post('penyakit/store', 'Penyakit::store');
    $routes->get('penyakit/edit/(:num)', 'Penyakit::edit/$1');
    $routes->post('penyakit/update/(:num)', 'Penyakit::update/$1');
    $routes->get('penyakit/delete/(:num)', 'Penyakit::delete/$1');

    // route relasi
    $routes->get('relasi', 'Relasi::index');
    $routes->get('relasi/add', 'Relasi::create');
    $routes->post('relasi/create', 'Relasi::create');
    $routes->get('relasi/edit/(:num)', 'Relasi::edit/$1');
    $routes->post('relasi/update/(:num)', 'Relasi::update/$1');
    $routes->get('relasi/delete/(:num)', 'Relasi::delete/$1');

    // route diagnosa
    $routes->get('diagnosa', 'Diagnosa::index');
    $routes->get('diagnosa/detail/(:num)', 'Diagnosa::detail/$1');
    // $routes->get('diagnosa/delete', 'Diagnosa::delete/$1');
    $routes->get('diagnosa/delete/(:num)', 'Diagnosa::delete/$1');
    // $routes->get('diagnosa/lihat-data', 'Diagnosa::lihatData');
});

// route diagnosa
$routes->get('/mulai-diagnosa', 'MulaiDiagnosa::index');
$routes->post('/mulai-diagnosa/start', 'MulaiDiagnosa::start');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
