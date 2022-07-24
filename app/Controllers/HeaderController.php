<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HeaderController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->HeaderModel = new \App\Models\HeaderModel();
        // if(!$this->session->userdata('email')){
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Login terlebih dahulu!</div>');
        //     redirect('auth/');
        // }
    }
    public function index_lelang()
    {
        $data = [
            'title' => 'Admin Lelang',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['HeaderLelang'] = $this->HeaderModel->get_all_lelang();
        return view('admin/Header/Lelang/adminLelang', $data);
    }
    public function index_loker()
    {
        $data = [
            'title' => 'Admin Loker',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['HeaderLoker'] = $this->HeaderModel->get_all_loker();
        return view('admin/Header/Loker/AdminLoker', $data);
    }
    public function index_pat()
    {
        $data = [
            'title' => 'Admin PAT',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['HeaderPAT'] = $this->HeaderModel->get_all_pat();
        return view('admin/Header/PAT/AdminPAT', $data);
    }
    public function index_penghargaan()
    {
        $data = [
            'title' => 'Admin Penghargaan',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['HeaderPenghargaan'] = $this->HeaderModel->get_all_penghargaan();
        return view('admin/Header/Penghargaan/AdminPenghargaan', $data);
    }
    public function index_publikasi()
    {
        $data = [
            'title' => 'Admin Publikasi',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['HeaderPublikasi'] = $this->HeaderModel->get_all_publikasi();
        return view('admin/Header/Publikasi/AdminPublikasi', $data);
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
