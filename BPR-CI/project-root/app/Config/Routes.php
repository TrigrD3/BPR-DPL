<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index');
$routes->get('/SimulasiKredit', 'Pages::SimulasiKredit');
$routes->get('/SimulasiTabungan', 'Pages::SimulasiTabungan');
$routes->get('/Kredit', 'Pages::Kredit');
$routes->get('/Deposito', 'Pages::Deposito');
$routes->get('/KAP', 'Pages::KAP');
$routes->get('/Loker', 'Pages::Loker');
$routes->get('/Publikasi', 'Pages::Publikasi');
$routes->get('/ProdukDeposito', 'Pages::ProdukDeposito');
$routes->get('/Penghargaan', 'Pages::Penghargaan');
$routes->get('/Admin', 'Pages::admin');
$routes->get('/Tabungan', 'Pages::Tabungan');
$routes->get('/ProdukTabungan', 'Pages::ProdukTabungan');
$routes->get('/Lelang', 'Pages::Lelang');
$routes->get('/VisiMisi', 'Pages::VisiMisi');
$routes->get('/StrukturOrganisasi', 'Pages::StrukturOrganisasi');
$routes->get('/LayananLainnya', 'Pages::LayananLainnya');
$routes->get('/AdminHome', 'Pages::AdminHome');
$routes->get('/AdminKredit', 'Pages::AdminKredit');
$routes->get('/AdminPublikasi', 'Pages::AdminPublikasi');
$routes->get('/AdminLoker', 'Pages::AdminLoker');
$routes->get('/AdminProfil', 'Pages::AdminProfil');
$routes->get('/AdminSejarah', 'Pages::AdminSejarah');
$routes->get('/AdminBerita', 'Pages::AdminBerita');
$routes->get('/AdminAlamat', 'Pages::AdminAlamat');
$routes->get('/adminLelang', 'Pages::adminLelang');
$routes->get('/adminLayananLainnya', 'Pages::adminLayananLainnya');
$routes->get('/adminVisiMisi', 'Pages::adminVisiMisi');
$routes->get('/adminStrukturOrganisasi', 'Pages::adminStrukturOrganisasi');
$routes->get('/Edit', 'Pages::Edit');
$routes->get('/Tambah', 'Pages::Tambah');
$routes->get('/Profil', 'Pages::Profil');
$routes->get('/Sejarah', 'Pages::Sejarah');
$routes->get('/Login', 'Pages::Login');
$routes->get('/PusatBerita', 'Pages::PusatBerita');
$routes->get('/Berita', 'Pages::Berita');
$routes->get('/AlamatKantor', 'Pages::AlamatKantor');

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
