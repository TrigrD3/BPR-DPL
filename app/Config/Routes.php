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
$routes->get('/SimulasiDeposito', 'Pages::SimulasiDeposito');
$routes->get('/Kredit', 'Pages::Kredit');
$routes->get('/Deposito', 'Pages::Deposito');
$routes->get('/KAP', 'Pages::KAP');
$routes->get('/Loker', 'Pages::Loker');
$routes->get('/Publikasi', 'Pages::Publikasi');
$routes->get('/ProdukDeposito', 'Pages::ProdukDeposito');
$routes->get('/ProdukKredit', 'Pages::ProdukKredit');
$routes->get('/Penghargaan', 'Pages::Penghargaan');
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
$routes->get('/Admin', 'Admin::admin');
$routes->get('/AdminHome', 'Admin::AdminHome');
$routes->get('/AdminKredit', 'Admin::AdminKredit');
$routes->get('/TambahProdukKredit', 'Admin::TambahProdukKredit');
$routes->get('/TambahIklanKredit', 'Admin::TambahIklanKredit');
$routes->get('/EditProdukKredit', 'Admin::EditProdukKredit');
$routes->get('/EditIklanKredit', 'Admin::EditIklanKredit');
$routes->get('/EditLinkKredit', 'Admin::EditLinkKredit');
$routes->get('/AdminDeposito', 'Admin::AdminDeposito');
$routes->get('/TambahIklanDeposito', 'Admin::TambahIklanDeposito');
$routes->get('/TambahProdukDeposito', 'Admin::TambahProdukDeposito');
$routes->get('/EditProdukDeposito', 'Admin::EditProdukDeposito');
$routes->get('/EditIklanDeposito', 'Admin::EditIklanDeposito');
$routes->get('/EditLinkDeposito', 'Admin::EditLinkDeposito');
$routes->get('/AdminTabungan', 'Admin::AdminTabungan');
$routes->get('/TambahIklanTabungan', 'Admin::TambahIklanTabungan');
$routes->get('/TambahProdukTabungan', 'Admin::TambahProdukTabungan');
$routes->get('/EditProdukTabungan', 'Admin::EditProdukTabungan');
$routes->get('/EditLinkTabungan', 'Admin::EditLinkTabungan');
$routes->get('/EditIklanTabungan', 'Admin::EditIklanTabungan');

$routes->get('/AdminPublikasi', 'Admin::AdminPublikasi');
$routes->get('/adminPenghargaan', 'Admin::adminPenghargaan');
$routes->get('/AdminPAT', 'Admin::AdminPAT');
$routes->get('/AdminUser', 'Admin::AdminUser');
$routes->get('/AdminLoker', 'Admin::AdminLoker');
$routes->get('/AdminBerita', 'Admin::AdminBerita');




//Login
$routes->get('/Login', 'AuthController::login');

//Admin Identitas
$routes->get('/adminIdentitas', 'IdentitasWebsiteController::index');
$routes->post('/adminIdentitas/update', 'IdentitasWebsiteController::update');

//Admin Kredit
$routes->get('/AdminKredit', 'KreditController::index');
$routes->get('/TambahProdukKredit', 'Admin::TambahProdukKredit');
$routes->get('/TambahIklanKredit', 'Admin::TambahIklanKredit');
$routes->get('/EditProdukKredit', 'Admin::EditProdukKredit');
$routes->get('/EditIklanKredit', 'Admin::EditIklanKredit');

//Admin Deposito
$routes->get('/AdminDeposito', 'DepositoController::index');
$routes->get('/TambahIklanDeposito', 'Admin::TambahIklanDeposito');
$routes->get('/TambahProdukDeposito', 'Admin::TambahProdukDeposito');
$routes->get('/EditProdukDeposito', 'Admin::EditProdukDeposito');
$routes->get('/EditIklanDeposito', 'Admin::EditIklanDeposito');

// Admin Publikasi
$routes->get('/AdminPublikasi', 'PublikasiController::index');
$routes->get('/EditPublikasi', 'Admin::EditPublikasi');
$routes->get('/TambahPublikasi', 'Admin::TambahPublikasi');

// Admin PAT
$routes->get('/AdminPAT', 'PATController::index');
$routes->get('/EditPAT', 'Admin::EditPAT');
$routes->get('/TambahPAT', 'Admin::TambahPAT');

// Admin Loker
$routes->get('/AdminLoker', 'LokerController::index');
$routes->get('/EditLoker', 'Admin::EditLoker');

// Admin Penghargaan
$routes->get('/adminPenghargaan', 'PenghargaanController::index');
$routes->get('/EditPenghargaan', 'Admin::EditPenghargaan');
$routes->get('/TambahPenghargaan', 'Admin::TambahPenghargaan');

// Admin Lelang
$routes->get('/adminLelang', 'LelangController::index');
$routes->get('/EditLelang', 'Admin::EditLelang');
$routes->get('/TambahLelang', 'Admin::TambahLelang');

// Admin Akun
$routes->get('/AdminUser', 'UserController::index');
$routes->get('/TambahUser', 'Admin::TambahUser');
$routes->get('/EditUser', 'Admin::EditUser');

//Admin Tabungan
$routes->get('/AdminTabungan', 'TabunganController::index');
$routes->get('/TambahIklanTabungan', 'Admin::TambahIklanTabungan');
$routes->get('/TambahProdukTabungan', 'Admin::TambahProdukTabungan');
$routes->get('/EditProdukTabungan', 'Admin::EditProdukTabungan');
$routes->get('/EditLinkTabungan', 'Admin::EditLinkTabungan');
$routes->get('/EditIklanTabungan', 'Admin::EditIklanTabungan');

//Admin Tentang Lestari
//Profil
$routes->get('/AdminProfil', 'TentangLestariController::index_profil');
$routes->get('/EditProfil', 'Admin::EditProfil');
$routes->get('/TambahProfil', 'Admin::TambahProfil');
//Sejarah
$routes->get('/AdminSejarah', 'TentangLestariController::index_sejarah');
$routes->get('/EditSejarah', 'Admin::EditSejarah');
$routes->get('/TambahSejarah', 'Admin::TambahSejarah');
//Alamat
$routes->get('/AdminAlamat', 'TentangLestariController::index_alamat');
$routes->get('/EditAlamat', 'Admin::EditAlamat');
$routes->get('/TambahAlamat', 'Admin::TambahAlamat');
//Visi misi
$routes->get('/adminVisiMisi', 'TentangLestariController::index_visi_misi');
$routes->get('/EditVisi', 'Admin::EditVisi');
$routes->get('/EditMisi', 'Admin::EditMisi');
$routes->get('/TambahMisi', 'Admin::TambahMisi');
$routes->get('/TambahVisi', 'Admin::TambahVisi');
//Struktur Organisasi
$routes->get('/adminStrukturOrganisasi', 'TentangLestariController::index_struktur_organisasi');
$routes->get('/EditStrukturOrganisasi', 'Admin::EditStrukturOrganisasi');


//Admin LayananLainnya
$routes->get('/adminLayananLainnya', 'LayananLainController::index');
$routes->get('/EditDeskripsiLL', 'Admin::EditDeskripsiLL');
$routes->get('/EditFotoLL', 'Admin::EditFotoLL');
$routes->get('/TambahDeskripsiLL', 'Admin::TambahDeskripsiLL');
$routes->get('/TambahFotoLL', 'Admin::TambahFotoLL');



$routes->get('/EditBerita', 'Admin::EditBerita');
$routes->get('/TambahBerita', 'Admin::TambahBerita');
$routes->get('/EditIklan', 'Admin::EditIklan');
$routes->get('/TambahIklan', 'Admin::TambahIklan');
$routes->get('/EditDeskripsi', 'Admin::EditDeskripsi');












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
