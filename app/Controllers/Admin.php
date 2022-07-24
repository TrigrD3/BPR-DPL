<?php

namespace App\Controllers;
// defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends BaseController
{
    // protected $table = 'identitas_website';
    private $db;

    public function __construct()
    {
        // parent::__construct();
        $this->session = \Config\Services::session();
        $this->db = \Config\Database::connect();
        // $this->load->model('IdentitasWebsiteModel');
        // if (!$this->session->get('username')) {
        //     $this->session->setFlashdata('message', '<div class="alert alert-success" role="alert">Silahkan Login terlebih dahulu!</div>');
        //     return redirect()->to(base_url('Login'));
        // }
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

    public function Admin()
    {
        $data = [
            'title' => 'Admin',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('Admin/Admin', $data);
    }
    public function AdminHome()
    {
        $data = [
            'title' => 'Admin Home',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Home/AdminHome', $data);
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


    public function TambahIklanKredit()
    {
        $data = [
            'title' => 'Admin Kredit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/kredit/TambahIklanKredit', $data);
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
    public function EditLinkKredit()
    {
        $data = [
            'title' => 'Admin Kredit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/kredit/EditLinkKredit', $data);
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
    public function EditLinkDeposito()
    {
        $data = [
            'title' => 'Admin Kredit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Deposito/EditLinkDeposito', $data);
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

    public function EditLinkTabungan()
    {
        $data = [
            'title' => 'Admin Kredit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Tabungan/EditLinkTabungan', $data);
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
            'title' => 'Admin Alamat Kantor',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Alamat/AdminAlamat', $data);
    }

    public function EditAlamat()
    {
        $data = [
            'title' => 'Edit Alamat Kantor',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Alamat/Edit', $data);
    }

    public function TambahAlamat()
    {
        $data = [
            'title' => 'Tambah Alamat Kantor',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Alamat/Tambah', $data);
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
        echo view('admin/Profil/AdminProfil', $data);
    }

    public function EditProfil()
    {
        $data = [
            'title' => 'Edit Isi Profil',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Profil/Edit', $data);
    }

    public function TambahProfil()
    {
        $data = [
            'title' => 'Tambah Isi Profil',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Profil/Tambah', $data);
    }

    public function AdminSejarah()
    {
        $data = [
            'title' => 'Admin Sejarah',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Sejarah/AdminSejarah', $data);
    }

    public function EditSejarah()
    {
        $data = [
            'title' => 'Edit Sejarah',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Sejarah/Edit', $data);
    }

    public function TambahSejarah()
    {
        $data = [
            'title' => 'Edit Sejarah',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Sejarah/Tambah', $data);
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
        echo view('admin/LayananLain/adminLayananLainnya', $data);
    }
    public function EditDeskripsiLL()
    {
        $data = [
            'title' => 'Edit Deskripsi Layanan Lainnya',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/LayananLain/EditDeskripsi', $data);
    }
    public function TambahDeskripsiLL()
    {
        $data = [
            'title' => 'Edit Deskripsi Layanan Lainnya',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/LayananLain/TambahDeskripsi', $data);
    }
    public function EditFotoLL()
    {
        $data = [
            'title' => 'Edit Foto Layanan Lainnya',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/LayananLain/EditFoto', $data);
    }
    public function TambahFotoLL()
    {
        $data = [
            'title' => 'Tambah Foto Layanan Lainnya',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/LayananLain/TambahFoto', $data);
    }
    public function adminVisiMisi()
    {
        $data = [
            'title' => 'Admin Visi Misi',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/VisiMisi/adminVisiMisi', $data);
    }
    public function EditVisi()
    {
        $data = [
            'title' => 'Admin Visi ',
            'nama' => 'Visi',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/VisiMisi/Edit', $data);
    }

    public function EditMisi()
    {
        $data = [
            'title' => 'Edit Misi ',
            'nama' => 'Misi',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/VisiMisi/Edit', $data);
    }
    public function TambahMisi()
    {
        $data = [
            'title' => 'Tambah Misi ',
            'nama' => 'Misi',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/VisiMisi/Tambah', $data);
    }
    public function TambahVisi()
    {
        $data = [
            'title' => 'Tambah Visi ',
            'nama' => 'Visi',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/VisiMisi/Tambah', $data);
    }

    public function adminStrukturOrganisasi()
    {
        $data = [
            'title' => 'Admin Struktur Organisasi',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/StrukturOrganisasi/adminStrukturOrganisasi', $data);
    }
    public function EditStrukturOrganisasi()
    {
        $data = [
            'title' => 'Edit Struktur Organisasi',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/StrukturOrganisasi/Edit', $data);
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
    
    public function TambahIklan()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Home/TambahIklan', $data);
    }
    public function EditIklan()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Home/EditIklan', $data);
    }
    public function EditDeskripsi()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Home/EditDeskripsi', $data);
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
