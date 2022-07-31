<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class IdentitasWebsiteController extends BaseController
{

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->IdentitasWebsiteModel = new \App\Models\IdentitasWebsiteModel();
        // if(!$this->session->userdata('email')){
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Login terlebih dahulu!</div>');
        //     redirect('auth/');
        // }

    }

    public function index()
    {
        $data = [
            'title' => 'Identitas Website',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['IdentitasWebsite'] = $this->IdentitasWebsiteModel->get_all();
        return view('admin/IdentitasWebsite/adminIdentitas', $data);
    }

    public function update()
    {

        $dataBerkas = $this->request->getFile('logo');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            unlink('uploads/IdentitasWebsite' . '/' . $this->request->getVar('logo'));
            $data = [
                'id_identitas' => $this->request->getVar('id_identitas'),
                'whatsapp' => $this->request->getVar('whatsapp'),
                'facebook' => $this->request->getVar('facebook'),
                'instagram' => $this->request->getVar('instagram'),
                'logo' => $fileName,
            ];

            $dataBerkas->move('uploads/IdentitasWebsite/', $fileName);
        } else {
            $data = [
                'id_identitas' => $this->request->getVar('id_identitas'),
                'whatsapp' => $this->request->getVar('whatsapp'),
                'facebook' => $this->request->getVar('facebook'),
                'instagram' => $this->request->getVar('instagram'),
            ];
        }

        $this->IdentitasWebsiteModel->update_IdentitasWebsite($data);
        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diupdate.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');

        return redirect()->to(base_url('adminIdentitas'));
    }
}
