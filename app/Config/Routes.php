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
// start of pages
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
$routes->get('/Profil', 'Pages::Profil');
$routes->get('/Sejarah', 'Pages::Sejarah');
$routes->get('/PusatBerita', 'Pages::PusatBerita');
$routes->get('/Berita', 'Pages::Berita');
$routes->get('/AlamatKantor', 'Pages::AlamatKantor');
// end of pages
// start of admin
$routes->get('/AdminHome', 'Admin::AdminHome');
$routes->get('/AdminKredit', 'Admin::AdminKredit');
$routes->get('/TambahProdukKredit', 'Admin::TambahProdukKredit');
$routes->get('/TambahIklanKredit', 'Admin::TambahIklanKredit');
$routes->get('/EditProdukKredit', 'Admin::EditProdukKredit');
$routes->get('/EditIklanKredit', 'Admin::EditIklanKredit');
$routes->get('/AdminDeposito', 'Admin::AdminDeposito');
$routes->get('/TambahIklanDeposito', 'Admin::TambahIklanDeposito');
$routes->get('/TambahProdukDeposito', 'Admin::TambahProdukDeposito');
$routes->get('/EditProdukDeposito', 'Admin::EditProdukDeposito');
$routes->get('/EditIklanDeposito', 'Admin::EditIklanDeposito');
$routes->get('/AdminTabungan', 'Admin::AdminTabungan');
$routes->get('/TambahIklanTabungan', 'Admin::TambahIklanTabungan');
$routes->get('/TambahProdukTabungan', 'Admin::TambahProdukTabungan');
$routes->get('/EditProdukTabungan', 'Admin::EditProdukTabungan');
$routes->get('/EditIklanTabungan', 'Admin::EditIklanTabungan');
$routes->get('/AdminPublikasi', 'Admin::AdminPublikasi');
$routes->get('/adminPenghargaan', 'Admin::adminPenghargaan');
$routes->get('/AdminPAT', 'Admin::AdminPAT');
$routes->get('/AdminUser', 'Admin::AdminUser');
$routes->get('/AdminLoker', 'Admin::AdminLoker');

$routes->get('/AdminProfil', 'Admin::AdminProfil');
$routes->get('/EditProfil', 'Admin::EditProfil');
$routes->get('/TambahProfil', 'Admin::TambahProfil');

$routes->get('/AdminSejarah', 'Admin::AdminSejarah');
$routes->get('/EditSejarah', 'Admin::EditSejarah');
$routes->get('/TambahSejarah', 'Admin::TambahSejarah');

$routes->get('/AdminBerita', 'Admin::AdminBerita');

$routes->get('/AdminAlamat', 'Admin::AdminAlamat');
$routes->get('/EditAlamat', 'Admin::EditAlamat');
$routes->get('/TambahAlamat', 'Admin::TambahAlamat');

$routes->get('/adminLelang', 'Admin::adminLelang');
$routes->get('/adminIdentitas', 'Admin::adminIdentitas');
$routes->get('/editIdentitas', 'Admin::editIdentitas');

$routes->get('/adminLayananLainnya', 'Admin::adminLayananLainnya');
$routes->get('/EditDeskripsiLL', 'Admin::EditDeskripsiLL');
$routes->get('/EditFotoLL', 'Admin::EditFotoLL');
$routes->get('/TambahDeskripsiLL', 'Admin::TambahDeskripsiLL');
$routes->get('/TambahFotoLL', 'Admin::TambahFotoLL');

$routes->get('/adminVisiMisi', 'Admin::adminVisiMisi');
$routes->get('/EditVisi', 'Admin::EditVisi');
$routes->get('/EditMisi', 'Admin::EditMisi');
$routes->get('/TambahMisi', 'Admin::TambahMisi');
$routes->get('/TambahVisi', 'Admin::TambahVisi');

$routes->get('/adminStrukturOrganisasi', 'Admin::adminStrukturOrganisasi');
$routes->get('/EditStrukturOrganisasi', 'Admin::EditStrukturOrganisasi');

$routes->get('/Edit', 'Admin::Edit');
$routes->get('/EditUser', 'Admin::EditUser');
$routes->get('/EditLelang', 'Admin::EditLelang');
$routes->get('/EditPAT', 'Admin::EditPAT');
$routes->get('/EditLoker', 'Admin::EditLoker');
$routes->get('/EditPublikasi', 'Admin::EditPublikasi');
$routes->get('/EditPenghargaan', 'Admin::EditPenghargaan');
$routes->get('/Tambah', 'Admin::Tambah');
$routes->get('/TambahUser', 'Admin::TambahUser');
$routes->get('/TambahLelang', 'Admin::TambahLelang');
$routes->get('/TambahPAT', 'Admin::TambahPAT');
$routes->get('/TambahPublikasi', 'Admin::TambahPublikasi');
$routes->get('/TambahPenghargaan', 'Admin::TambahPenghargaan');
$routes->get('/Login', 'Admin::Login');
// end of admin

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
