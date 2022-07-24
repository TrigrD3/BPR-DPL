<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LokerController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->LokerModel = new \App\Models\LokerModel();
        // if(!$this->session->userdata('email')){
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Login terlebih dahulu!</div>');
        //     redirect('auth/');
        // }

    }

    public function index()
    {
        $data = [
            'title' => 'Admin Loker',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['LokerProduk'] = $this->LokerModel->get_all_produk();
        $data['LokerIklan'] = $this->LokerModel->get_all_iklan();
        return view('Admin/Loker/AdminLoker', $data);
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
