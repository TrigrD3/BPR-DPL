<?php

namespace App\Controllers;

class Admin extends BaseController
{

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
        echo view('admin/kredit/AdminKredit', $data);
    }

    public function TambahProdukKredit()
    {
        $data = [
            'title' => 'Admin Kredit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/kredit/TambahProdukKredit', $data);
    }
    
    public function TambahIklanKredit()
    {
        $data = [
            'title' => 'Admin Kredit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/kredit/TambahIklanKredit', $data);
    }
    
    public function EditProdukKredit()
    {
        $data = [
            'title' => 'Admin Kredit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/kredit/EditProdukKredit', $data);
    }
    
    public function EditIklanKredit()
    {
        $data = [
            'title' => 'Admin Kredit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/kredit/EditIklanKredit', $data);
    }

    public function AdminDeposito()
    {
        $data = [
            'title' => 'Admin Deposito',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Deposito/AdminDeposito', $data);
    }
    
    public function EditIklanDeposito()
    {
        $data = [
            'title' => 'Admin Deposito',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Deposito/EditIklanDeposito', $data);
    }
    
    public function EditProdukDeposito()
    {
        $data = [
            'title' => 'Admin Deposito',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Deposito/EditProdukDeposito', $data);
    }
    
    public function TambahProdukDeposito()
    {
        $data = [
            'title' => 'Admin Deposito',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Deposito/TambahProdukDeposito', $data);
    }
    
    public function TambahIklanDeposito()
    {
        $data = [
            'title' => 'Admin Deposito',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Deposito/TambahIklanDeposito', $data);
    }
    public function AdminTabungan()
    {
        $data = [
            'title' => 'Admin Tabungan',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Tabungan/AdminTabungan', $data);
    }

    public function TambahProdukTabungan()
    {
        $data = [
            'title' => 'Admin Tabungan',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Tabungan/TambahProdukTabungan', $data);
    }
    
    public function TambahIklanTabungan()
    {
        $data = [
            'title' => 'Admin Tabungan',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Tabungan/TambahIklanTabungan', $data);
    }
    
    public function EditIklanTabungan()
    {
        $data = [
            'title' => 'Admin Tabungan',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Tabungan/EditIklanTabungan', $data);
    }
    
    public function EditProdukTabungan()
    {
        $data = [
            'title' => 'Admin Tabungan',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Tabungan/EditProdukTabungan', $data);
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
        echo view('admin/Header/Publikasi/AdminPublikasi', $data);
    }

    public function TambahPublikasi()
    {
        $data = [
            'title' => 'Tambah',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Header/Publikasi/TambahPublikasi', $data);
    }

    public function EditPublikasi()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Header/Publikasi/EditPublikasi', $data);
    }

    public function AdminPAT()
    {
        $data = [
            'title' => 'Admin PAT',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Header/PAT/AdminPAT', $data);
    }

    public function TambahPAT()
    {
        $data = [
            'title' => 'Tambah',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Header/PAT/TambahPAT', $data);
    }
    public function EditPAT()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Header/PAT/EditPAT', $data);
    }

    public function AdminUser()
    {
        $data = [
            'title' => 'Admin User',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/User/AdminUser', $data);
    }
    public function AdminLoker()
    {
        $data = [
            'title' => 'Admin Loker',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Header/Loker/AdminLoker', $data);
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
        echo view('admin/Header/Lelang/adminLelang', $data);
    }
    
    public function TambahLelang()
    {
        $data = [
            'title' => 'Tambah',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Header/Lelang/TambahLelang', $data);
    }
    public function EditLelang()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('admin/Header/Lelang/EditLelang', $data);
    }

    public function adminIdentitas()
    {
        $data = [
            'title' => 'Admin Identitas',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/IdentitasWebsite/adminIdentitas', $data);
    }


    public function editIdentitas()
    {
        $data = [
            'title' => 'Admin Identitas',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/IdentitasWebsite/EditIdentitas', $data);
    }

    public function adminPenghargaan()
    {
        $data = [
            'title' => 'Admin Lelang',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Header/Penghargaan/adminPenghargaan', $data);
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
    public function EditLoker()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Header/Loker/EditLoker', $data);
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
    
    
    public function TambahPenghargaan()
    {
        $data = [
            'title' => 'Tambah',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Header/Penghargaan/TambahPenghargaan', $data);
    }
    public function EditPenghargaan()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('admin/Header/Penghargaan/EditPenghargaan', $data);
    }
    public function TambahUser()
    {
        $data = [
            'title' => 'Tambah',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/User/TambahUser', $data);
    }
    public function EditUser()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('admin/User/EditUser', $data);
    }
    
    public function Login()
    {
        $data = [
            'title' => 'Login',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Login', $data);
    }
}
