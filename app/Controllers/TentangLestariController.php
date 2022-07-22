<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TentangLestariController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->TentangLestariModel = new \App\Models\TentangLestariModel();
        // if(!$this->session->userdata('email')){
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Login terlebih dahulu!</div>');
        //     redirect('auth/');
        // }

    }

    public function index_profil()
    {
        $data = [
            'title' => 'Admin Tabungan',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['TentangLestariProfil'] = $this->TentangLestariModel->get_all_profil();
        return view('Admin/TentangLestari/Profil/AdminProfil', $data);
    }

    public function index_sejarah()
    {
        $data = [
            'title' => 'Admin Sejarah',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['TentangLestariSejarah'] = $this->TentangLestariModel->get_all_sejarah();
        return view('Admin/TentangLestari/Sejarah/AdminSejarah', $data);
    }
    public function index_alamat()
    {
        $data = [
            'title' => 'Admin Alamat',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['TentangLestariAlamat'] = $this->TentangLestariModel->get_all_alamat();
        return view('Admin/TentangLestari/Alamat/AdminAlamat', $data);
    }
    public function index_visi_misi()
    {
        $data = [
            'title' => 'Admin Visi Misi',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['TentangLestariVisiMisi'] = $this->TentangLestariModel->get_all_visimisi();
        return view('Admin/TentangLestari/VisiMisi/adminVisiMisi', $data);
    }
    public function index_struktur_organisasi()
    {
        $data = [
            'title' => 'Admin Struktur Organisasi',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['TentangLestariStrukturOrganisasi'] = $this->TentangLestariModel->get_all_struktur_organisasi();
        return view('Admin/TentangLestari/StrukturOrganisasi/adminStrukturOrganisasi', $data);
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
