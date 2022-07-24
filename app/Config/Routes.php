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

$routes->get('/AdminBerita', 'Admin::AdminBerita');


//Login
$routes->get('/Login', 'AuthController::index');
$routes->post('/Login/process', 'AuthController::process');
$routes->get('/Logout', 'AuthController::logout');

$routes->group('', ['filter' => 'auth'], function ($routes) {
    //Admin Index
    $routes->get('/Admin', 'Admin::admin', ['filter' => 'auth']);

    //Admin Home
    //Berita
    $routes->get('/AdminHome', 'HomeController::index');
    $routes->get('/TambahBerita', 'HomeController::TambahBerita');
    $routes->add('/TambahBerita', 'HomeController::AddBerita');
    $routes->get('/EditBerita/(:num)', 'HomeController::EditBerita/$1');
    $routes->post('/EditBerita/(:num)', 'HomeController::UpdateBerita/$1');
    $routes->get('/HapusBerita/(:num)', 'HomeController::DeleteBerita/$1');

    $routes->get('/EditIklan', 'HomeController::EditIklan');
    $routes->get('/TambahIklan', 'HomeController::TambahIklan');
    $routes->get('/EditDeskripsi', 'HomeController::EditDeskripsi');

    //Admin Identitas
    $routes->get('/adminIdentitas', 'IdentitasWebsiteController::index');
    $routes->post('/adminIdentitas/update', 'IdentitasWebsiteController::update');

    //Admin Kredit
    $routes->get('/AdminKredit', 'KreditController::index');
    $routes->get('/TambahProdukKredit', 'KreditController::TambahProdukKredit');
    $routes->add('/TambahProdukKredit', 'KreditController::AddKredit');
    $routes->get('/EditProdukKredit/(:num)', 'KreditController::EditProdukKredit/$1');
    $routes->post('/EditProdukKredit/(:num)', 'KreditController::UpdateKredit/$1');
    $routes->get('/HapusProdukKredit/(:num)', 'KreditController::DeleteKredit/$1');

    $routes->get('/TambahIklanKredit', 'KreditController::TambahIklanKredit');
    $routes->add('/TambahIklanKredit', 'KreditController::AddIklanKredit');
    $routes->get('/EditIklanKredit/(:num)', 'KreditController::EditIklanKredit/$1');
    $routes->post('/EditIklanKredit/(:num)', 'KreditController::UpdateIklanKredit/$1');
    $routes->get('/HapusIklanKredit/(:num)', 'KreditController::DeleteIklanKredit/$1');

    //Admin Deposito
    $routes->get('/AdminDeposito', 'DepositoController::index');
    $routes->get('/TambahIklanDeposito', 'Admin::TambahIklanDeposito');
    $routes->get('/TambahProdukDeposito', 'Admin::TambahProdukDeposito');
    $routes->get('/EditProdukDeposito', 'Admin::EditProdukDeposito');
    $routes->get('/EditIklanDeposito', 'Admin::EditIklanDeposito');

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

    //Admin Header
    //Publikasi
    $routes->get('/AdminPublikasi', 'HeaderController::index_publikasi');
    $routes->get('/TambahPublikasi', 'Admin::TambahPublikasi');
    $routes->get('/EditPublikasi', 'Admin::EditPublikasi');
    //Penghargaan
    $routes->get('/adminPenghargaan', 'HeaderController::index_Penghargaan');
    $routes->get('/TambahPenghargaan', 'Admin::TambahPenghargaan');
    $routes->get('/EditPenghargaan', 'Admin::EditPenghargaan');
    //PAT
    $routes->get('/AdminPAT', 'HeaderController::index_pat');
    $routes->get('/EditPAT', 'Admin::EditPAT');
    $routes->get('/TambahPAT', 'Admin::TambahPAT');
    //Loker
    $routes->get('/AdminLoker', 'HeaderController::index_loker');
    $routes->get('/EditLoker', 'Admin::EditLoker');
    //Lelang
    $routes->get('/adminLelang', 'HeaderController::index_lelang');
    $routes->get('/EditLelang', 'Admin::EditLelang');
    $routes->get('/TambahLelang', 'Admin::TambahLelang');

    //AdminUser
    $routes->get('/AdminUser', 'AkunController::Index');
    $routes->get('/EditUser', 'Admin::EditUser');
    $routes->get('/TambahUser', 'Admin::TambahUser');
});







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
