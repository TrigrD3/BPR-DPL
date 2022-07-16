<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Index | BANK LESTARI',
            'css' => 'index',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/index', $data);
    }

    public function SimulasiKredit()
    {
        $data = [
            'title' => 'SimulasiKredit | BANK LESTARI',
            'css' => 'SimulasiKredit',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/SimulasiKredit', $data);
    }

    public function SimulasiTabungan()
    {
        $data = [
            'title' => 'SimulasiTabungan | BANK LESTARI',
            'css' => 'SimulasiTabungan',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/SimulasiTabungan', $data);
    }

    public function Kredit()
    {
        $data = [
            'title' => 'Deposito | BANK LESTARI',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/Deposito', $data);
    }

    public function Deposito()
    {
        $data = [
            'title' => 'Deposito | BANK LESTARI',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/Deposito', $data);
    }

    public function ProdukDeposito()
    {
        $data = [
            'title' => 'ProdukDeposito | BANK LESTARI',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/ProdukDeposito', $data);
    }

    public function KAP()
    {
        $data = [
            'title' => 'KAP | BANK LESTARI',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/KAP', $data);
    }

    public function Publikasi()
    {
        $data = [
            'title' => 'Publikasi | BANK LESTARI',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/Publikasi', $data);
    }

    public function Loker()
    {
        $data = [
            'title' => 'Loker | BANK LESTARI',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/Loker', $data);
    }


    public function Penghargaan()
    {
        $data = [
            'title' => 'Penghargaan | BANK LESTARI',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/Penghargaan', $data);
    }

    public function Berita()
    {
        $data = [
            'title' => 'Berita',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/Berita', $data);
    }

    public function PusatBerita()
    {
        $data = [
            'title' => 'Pusat Berita',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/PusatBerita', $data);
    }

    public function AlamatKantor()
    {
        $data = [
            'title' => 'Alamat Kantor',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/AlamatKantor', $data);
    }

    public function Tabungan()
    {
        $data = [
            'title' => 'Tabungan',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/Tabungan', $data);
    }

    public function ProdukTabungan()
    {
        $data = [
            'title' => 'Produk Tabungan',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/ProdukTabungan', $data);
    }

    public function Lelang()
    {
        $data = [
            'title' => 'Lelang',
            'css' => 'Lelang',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/Lelang', $data);
    }

    public function VisiMisi()
    {
        $data = [
            'title' => 'VisiMisi',
            'css' => 'VisiMisi',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/VisiMisi', $data);
    }

    public function StrukturOrganisasi()
    {
        $data = [
            'title' => 'StrukturOrganisasi',
            'css' => 'StrukturOrganisasi',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/StrukturOrganisasi', $data);
    }

    public function Profil()
    {
        $data = [
            'title' => 'Profil',
            'css' => 'Profil',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/Profil', $data);
    }

    public function LayananLainnya()
    {
        $data = [
            'title' => 'LayananLainnya',
            'css' => 'LayananLainnya',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/LayananLainnya', $data);
    }
    public function Sejarah()
    {
        $data = [
            'title' => 'Sejarah',
            'css' => 'Sejarah',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/Sejarah', $data);
    }
    public function Admin()
    {
        $data = [
            'title' => 'Admin',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/admin', $data);
    }
    public function AdminHome()
    {
        $data = [
            'title' => 'Admin Home',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/AdminHome', $data);
    }
    public function AdminKredit()
    {
        $data = [
            'title' => 'Admin Kredit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/AdminKredit', $data);
    }
    public function AdminDeposit()
    {
        $data = [
            'title' => 'Admin Deposit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/AdminDeposit', $data);
    }
    public function AdminTabungan()
    {
        $data = [
            'title' => 'Admin Tabungan',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/AdminTabungan', $data);
    }
    public function AdminBerita()
    {
        $data = [
            'title' => 'Admin Berita',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/AdminBerita', $data);
    }
    public function AdminAlamat()
    {
        $data = [
            'title' => 'Admin Berita',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/AdminAlamat', $data);
    }
    public function AdminPublikasi()
    {
        $data = [
            'title' => 'Admin Publikasi',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/AdminPublikasi', $data);
    }
    public function AdminPAT()
    {
        $data = [
            'title' => 'Admin PAT',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/AdminPAT', $data);
    }
    public function AdminUser()
    {
        $data = [
            'title' => 'Admin User',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/AdminUser', $data);
    }
    public function AdminLoker()
    {
        $data = [
            'title' => 'Admin Loker',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/AdminLoker', $data);
    }
    public function AdminProfil()
    {
        $data = [
            'title' => 'Admin Profil',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/AdminProfil', $data);
    }
    public function AdminSejarah()
    {
        $data = [
            'title' => 'Admin Sejarah',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/AdminSejarah', $data);
    }

    public function adminLelang()
    {
        $data = [
            'title' => 'Admin Lelang',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/adminLelang', $data);
    }
    public function adminIdentitas()
    {
        $data = [
            'title' => 'Admin Identitas',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/adminIdentitas', $data);
    }
    public function adminPenghargaan()
    {
        $data = [
            'title' => 'Admin Lelang',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/adminPenghargaan', $data);
    }
    public function adminLayananLainnya()
    {
        $data = [
            'title' => 'Admin Layanan Lainnya',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/adminLayananLainnya', $data);
    }
    public function adminVisiMisi()
    {
        $data = [
            'title' => 'Admin Visi Misi',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/adminVisiMisi', $data);
    }
    public function adminStrukturOrganisasi()
    {
        $data = [
            'title' => 'Admin Struktur Organisasi',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/adminStrukturOrganisasi', $data);
    }
    public function Edit()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('pages/Edit', $data);
    }
    public function Tambah()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Tambah', $data);
    }
    public function Login()
    {
        $data = [
            'title' => 'Login',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('pages/Login', $data);
    }
}
