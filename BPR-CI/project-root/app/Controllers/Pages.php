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
        echo view('pages/admin', $data);
    }
    public function AdminHome()
    {
        $data = [
            'title' => 'Admin Home',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('pages/AdminHome', $data);
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
        echo view('pages/Tambah', $data);
    }
}
