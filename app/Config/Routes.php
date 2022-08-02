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
// Home
$routes->get('/', 'HomeController::indexUser');
$routes->get('/LihatBerita/(:num)', 'HomeController::LihatBerita/$1');
$routes->get('/PusatBerita', 'HomeController::PusatBerita');

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
$routes->get('/Berita', 'Pages::Berita');
$routes->get('/AlamatKantor', 'Pages::AlamatKantor');
// end of pages
// start of admin
//Login
$routes->get('/Login', 'AuthController::index');
$routes->post('/Login/process', 'AuthController::process');
$routes->get('/Logout', 'AuthController::logout');

$routes->group('', ['filter' => 'auth'], function ($routes) {
    //Admin Index
    $routes->get('/Admin', 'Admin::admin');

    //Admin Home
    //Berita
    $routes->get('/AdminHome', 'HomeController::index');
    $routes->get('/TambahBerita', 'HomeController::TambahBerita');
    $routes->add('/TambahBerita', 'HomeController::AddBerita');
    $routes->get('/EditBerita/(:num)', 'HomeController::EditBerita/$1');
    $routes->post('/EditBerita/(:num)', 'HomeController::UpdateBerita/$1');
    $routes->get('/HapusBerita/(:num)', 'HomeController::DeleteBerita/$1');

    $routes->get('/TambahIklan', 'HomeController::TambahIklan');
    $routes->add('/TambahIklan', 'HomeController::AddIklan');
    $routes->get('/EditIklan/(:num)', 'HomeController::EditIklan/$1');
    $routes->post('/EditIklan/(:num)', 'HomeController::UpdateIklan/$1');
    $routes->get('/HapusIklan/(:num)', 'HomeController::DeleteIklan/$1');

    $routes->get('/EditDeskripsiWebsite/(:num)', 'HomeController::EditDeskripsiWebsite/$1');
    $routes->post('/EditDeskripsiWebsite/(:num)', 'HomeController::UpdateDeskripsiWebsite/$1');

    //Admin Identitas
    $routes->get('/adminIdentitas', 'IdentitasWebsiteController::index');
    $routes->post('/adminIdentitas/update', 'IdentitasWebsiteController::update');

    //Admin Kredit
    $routes->get('/AdminKredit', 'KreditController::index');
    $routes->get('/TambahProdukKredit', 'KreditController::TambahProdukKredit');
    $routes->add('/TambahProdukKredit', 'KreditController::AddKredit');
    $routes->get('/EditProdukKredit/(:num)', 'KreditController::EditProdukKredit/$1');
    $routes->get('/EditLinkKredit/(:num)', 'KreditController::EditLinkKredit/$1');
    $routes->post('/EditProdukKredit/(:num)', 'KreditController::UpdateKredit/$1');
    $routes->get('/HapusProdukKredit/(:num)', 'KreditController::DeleteKredit/$1');

    $routes->get('/TambahIklanKredit', 'KreditController::TambahIklanKredit');
    $routes->add('/TambahIklanKredit', 'KreditController::AddIklanKredit');
    $routes->get('/EditIklanKredit/(:num)', 'KreditController::EditIklanKredit/$1');
    $routes->post('/EditIklanKredit/(:num)', 'KreditController::UpdateIklanKredit/$1');
    $routes->get('/HapusIklanKredit/(:num)', 'KreditController::DeleteIklanKredit/$1');

    $routes->get('/EditFormKredit/(:num)', 'KreditController::EditFormKredit/$1');
    $routes->post('/EditFormKredit/(:num)', 'KreditController::UpdateFormKredit/$1');

    //Admin Deposito
    $routes->get('/AdminDeposito', 'DepositoController::index');
    $routes->get('/TambahProdukDeposito', 'DepositoController::TambahProdukDeposito');
    $routes->add('/TambahProdukDeposito', 'DepositoController::AddDeposito');
    $routes->get('/EditProdukDeposito/(:num)', 'DepositoController::EditProdukDeposito/$1');
    $routes->post('/EditProdukDeposito/(:num)', 'DepositoController::UpdateDeposito/$1');
    $routes->get('/HapusProdukDeposito/(:num)', 'DepositoController::DeleteDeposito/$1');

    $routes->get('/TambahIklanDeposito', 'DepositoController::TambahIklanDeposito');
    $routes->add('/TambahIklanDeposito', 'DepositoController::AddIklanDeposito');
    $routes->get('/EditIklanDeposito/(:num)', 'DepositoController::EditIklanDeposito/$1');
    $routes->post('/EditIklanDeposito/(:num)', 'DepositoController::UpdateIklanDeposito/$1');
    $routes->get('/HapusIklanDeposito/(:num)', 'DepositoController::DeleteIklanDeposito/$1');

    $routes->get('/EditFormDeposito/(:num)', 'DepositoController::EditFormDeposito/$1');
    $routes->post('/EditFormDeposito/(:num)', 'DepositoController::UpdateFormDeposito/$1');

    //Admin Tabungan
    $routes->get('/AdminTabungan', 'TabunganController::index');
    $routes->get('/TambahProdukTabungan', 'TabunganController::TambahProdukTabungan');
    $routes->add('/TambahProdukTabungan', 'TabunganController::AddTabungan');
    $routes->get('/EditProdukTabungan/(:num)', 'TabunganController::EditProdukTabungan/$1');
    $routes->post('/EditProdukTabungan/(:num)', 'TabunganController::UpdateTabungan/$1');
    $routes->get('/HapusProdukTabungan/(:num)', 'TabunganController::DeleteTabungan/$1');

    $routes->get('/TambahIklanTabungan', 'TabunganController::TambahIklanTabungan');
    $routes->add('/TambahIklanTabungan', 'TabunganController::AddIklanTabungan');
    $routes->get('/EditIklanTabungan/(:num)', 'TabunganController::EditIklanTabungan/$1');
    $routes->post('/EditIklanTabungan/(:num)', 'TabunganController::UpdateIklanTabungan/$1');
    $routes->get('/HapusIklanTabungan/(:num)', 'TabunganController::DeleteIklanTabungan/$1');

    $routes->get('/EditFormTabungan/(:num)', 'TabunganController::EditFormTabungan/$1');
    $routes->post('/EditFormTabungan/(:num)', 'TabunganController::UpdateFormTabungan/$1');

    //Admin LayananLainnya
    $routes->get('/adminLayananLainnya', 'LayananLainController::index');
    $routes->get('/TambahDeskripsiLL', 'LayananLainController::TambahPembayaran');
    $routes->add('/TambahDeskripsiLL', 'LayananLainController::AddPembayaran');
    $routes->get('/TambahFotoLL', 'LayananLainController::TambahProduk');
    $routes->add('/TambahFotoLL', 'LayananLainController::AddProduk');

    $routes->get('/EditDeskripsiLL/(:num)', 'LayananLainController::EditPembayaran/$1');
    $routes->post('/EditDeskripsiLL/(:num)', 'LayananLainController::UpdatePembayaran/$1');

    $routes->get('/EditFotoLL/(:num)', 'LayananLainController::EditProduk/$1');
    $routes->post('/EditFotoLL/(:num)', 'LayananLainController::UpdateProduk/$1');
    $routes->get('/HapusFotoLL/(:num)', 'LayananLainController::DeleteProduk/$1');
    $routes->get('/HapusDeskripsiLL/(:num)', 'LayananLainController::DeletePembayaran/$1');

    //Admin Tentang Lestari
    //Profil
    $routes->get('/AdminProfil', 'TentangLestariController::index_profil');
    $routes->get('/EditProfil/(:num)', 'TentangLestariController::EditProfil/$1');
    $routes->post('/EditProfil/(:num)', 'TentangLestariController::UpdateProfil/$1');
    //Sejarah
    $routes->get('/AdminSejarah', 'TentangLestariController::index_sejarah');
    $routes->get('/TambahSejarah', 'TentangLestariController::TambahSejarah');
    $routes->add('/TambahSejarah', 'TentangLestariController::AddSejarah');
    $routes->get('/EditSejarah/(:num)', 'TentangLestariController::EditSejarah/$1');
    $routes->post('/EditSejarah/(:num)', 'TentangLestariController::UpdateSejarah/$1');
    $routes->get('/HapusSejarah/(:num)', 'TentangLestariController::DeleteSejarah/$1');
    //Alamat
    $routes->get('/AdminAlamat', 'TentangLestariController::index_Alamat');
    $routes->get('/TambahAlamat', 'TentangLestariController::TambahAlamat');
    $routes->add('/TambahAlamat', 'TentangLestariController::AddAlamat');
    $routes->get('/EditAlamat/(:num)', 'TentangLestariController::EditAlamat/$1');
    $routes->post('/EditAlamat/(:num)', 'TentangLestariController::UpdateAlamat/$1');
    $routes->get('/HapusAlamat/(:num)', 'TentangLestariController::DeleteAlamat/$1');
    //Visi misi
    $routes->get('/adminVisiMisi', 'TentangLestariController::index_visi_misi');
    $routes->get('/EditVisiMisi/(:num)', 'TentangLestariController::EditVisiMisi/$1');
    $routes->post('/EditVisiMisi/(:num)', 'TentangLestariController::UpdateVisiMisi/$1');
    //Struktur Organisasi
    $routes->get('/adminStrukturOrganisasi', 'TentangLestariController::index_struktur_organisasi');
    $routes->get('/EditStrukturOrganisasi/(:num)', 'TentangLestariController::EditStrukturOrganisasi/$1');
    $routes->post('/EditStrukturOrganisasi/(:num)', 'TentangLestariController::UpdateStrukturOrganisasi/$1');

    //Admin Header
    //Publikasi
    $routes->get('/AdminPublikasi', 'HeaderController::index_publikasi');
    $routes->get('/TambahPublikasi', 'HeaderController::TambahPublikasi');
    $routes->add('/TambahPublikasi', 'HeaderController::AddPublikasi');
    $routes->get('/EditPublikasi/(:num)', 'HeaderController::EditPublikasi/$1');
    $routes->post('/EditPublikasi/(:num)', 'HeaderController::UpdatePublikasi/$1');
    $routes->get('/HapusPublikasi/(:num)', 'HeaderController::DeletePublikasi/$1');
    //Penghargaan
    $routes->get('/adminPenghargaan', 'HeaderController::index_penghargaan');
    $routes->get('/TambahPenghargaan', 'HeaderController::TambahPenghargaan');
    $routes->add('/TambahPenghargaan', 'HeaderController::AddPenghargaan');
    $routes->get('/EditPenghargaan/(:num)', 'HeaderController::EditPenghargaan/$1');
    $routes->post('/EditPenghargaan/(:num)', 'HeaderController::UpdatePenghargaan/$1');
    $routes->get('/HapusPenghargaan/(:num)', 'HeaderController::DeletePenghargaan/$1');
    //PAT
    $routes->get('/AdminPAT', 'HeaderController::index_pat');
    $routes->get('/TambahPAT', 'HeaderController::TambahPAT');
    $routes->add('/TambahPAT', 'HeaderController::AddPAT');
    $routes->get('/EditPAT/(:num)', 'HeaderController::EditPAT/$1');
    $routes->post('/EditPAT/(:num)', 'HeaderController::UpdatePAT/$1');
    $routes->get('/HapusPAT/(:num)', 'HeaderController::DeletePAT/$1');
    //Loker
    $routes->get('/AdminLoker', 'HeaderController::index_loker');
    $routes->get('/EditLoker/(:num)', 'HeaderController::EditLoker/$1');
    $routes->post('/EditLoker/(:num)', 'HeaderController::UpdateLoker/$1');
    //Lelang
    $routes->get('/adminLelang', 'HeaderController::index_lelang');
    $routes->get('/TambahLelang', 'HeaderController::TambahLelang');
    $routes->add('/TambahLelang', 'HeaderController::AddLelang');
    $routes->get('/EditLelang/(:num)', 'HeaderController::EditLelang/$1');
    $routes->post('/EditLelang/(:num)', 'HeaderController::UpdateLelang/$1');
    $routes->get('/HapusLelang/(:num)', 'HeaderController::DeleteLelang/$1');

    //AdminUser
    $routes->get('/AdminUser', 'AkunController::Index');
    $routes->get('/TambahUser', 'AkunController::TambahUser');
    $routes->add('/TambahUser', 'AkunController::AddUser');
    $routes->get('/EditUser/(:num)', 'AkunController::EditUser/$1');
    $routes->post('/EditUser/(:num)', 'AkunController::UpdateUser/$1');
    $routes->get('/DeleteUser/(:num)', 'AkunController::DeleteUser/$1');
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
