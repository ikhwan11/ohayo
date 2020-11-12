<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/Admin_kelolaUser/edit/(:segment)', 'Admin_kelolaUser::edit/$1');
$routes->delete('/Admin_kelolaUser/(:num)', 'Admin_kelolaUser::delete/$1');
$routes->get('/Admin_kelolaUser/(:any)', 'Admin_kelolaUser::detail/$1');

$routes->delete('/Admin_pendaftaran/(:num)', 'Admin_pendaftaran::delete/$1');

$routes->delete('/Admin_dataPeserta/(:num)', 'Admin_dataPeserta::delete/$1');
$routes->get('/Admin_dataPeserta/(:num)', 'Admin_dataPeserta::detail/$1');
$routes->get('/Admin_dataPeserta/(:num)', 'Admin_dataPeserta::cuti_true/$1');
$routes->get('/Admin_dataPeserta/(:num)', 'Admin_dataPeserta::cuti_false/$1');

$routes->get('/Admin_dashboard/(:num)', 'Admin_dashboard::absen/$1');
$routes->get('/Admin_dashboard/(:num)', 'Admin_dashboard::absen_update/$1');

$routes->get('/Admin_transaksiKelas/(:num)', 'Admin_dashboard::peserta_pilih/$1');

$routes->delete('/Admin_equipment/(:num)', 'Admin_equipment::delete/$1');
$routes->get('/Admin_equipment/(:num)', 'Admin_equipment::update_stok/$1');

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
