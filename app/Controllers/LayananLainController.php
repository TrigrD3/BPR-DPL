<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LayananLainController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->LayananLainModel = new \App\Models\LayananLainModel();
        // if(!$this->session->userdata('email')){
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Login terlebih dahulu!</div>');
        //     redirect('auth/');
        // }

    }

    public function index()
    {
        $data = [
            'title' => 'Admin Layanan Lainya',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['LayananLainProduk'] = $this->LayananLainModel->get_all_produk();
        $data['LayananLainPembayaran'] = $this->LayananLainModel->get_all_pembayaran();
        return view('Admin/LayananLain/AdminLayananLainnya', $data);
    }

    public function TambahPembayaran()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('admin/Kredit/TambahProdukKredit', $data);
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
}
