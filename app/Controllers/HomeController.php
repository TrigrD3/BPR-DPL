<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->HomeModel = new \App\Models\HomeModel();
        // if(!$this->session->userdata('email')){
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Login terlebih dahulu!</div>');
        //     redirect('auth/');
        // }

    }

    public function index()
    {
        $data = [
            'title' => 'Admin Home',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['HomeBerita'] = $this->HomeModel->get_all_berita();
        $data['HomeIklan'] = $this->HomeModel->get_all_iklan();
        $data['HomeDeskripsiWebsite'] = $this->HomeModel->get_all_deskripsi_website();
        return view('Admin/Home/AdminHome', $data);
    }

    public function TambahBerita()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Home/TambahBerita', $data);
    }

    public function EditBerita()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Home/EditBerita', $data);
    }

    public function update()
    {
        $data = [
            'id_identitas' => $this->request->getVar('id_identitas'),
            'whatsapp' => $this->request->getVar('whatsapp'),
            'facebook' => $this->request->getVar('facebook'),
            'instagram' => $this->request->getVar('instagram'),
            'logo' => $this->request->getVar('logo'),
        ];
        $this->IdentitasWebsiteModel->update_IdentitasWebsite($data);
        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diupdate.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('adminIdentitas'));
    }
}
