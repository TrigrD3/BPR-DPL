<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KreditController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->KreditModel = new \App\Models\KreditModel();
        // if(!$this->session->userdata('email')){
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Login terlebih dahulu!</div>');
        //     redirect('auth/');
        // }

    }

    public function index()
    {
        $data = [
            'title' => 'Admin Kredit',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['KreditProduk'] = $this->KreditModel->get_all_produk();
        $data['KreditIklan'] = $this->KreditModel->get_all_iklan();
        return view('Admin/Kredit/AdminKredit', $data);
    }

    public function TambahProdukKredit()
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

    public function AddIklanKredit()
    {
        $data = [
            'foto' => $this->request->getPost('foto'),
        ];

        $this->KreditModel->add_iklankredit($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminKredit'))->with('success', 'Data Added Successfully');
    }


    public function AddKredit()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('editor1'),
            'foto' => $this->request->getPost('foto'),
        ];

        $this->KreditModel->add_kredit($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminKredit'))->with('success', 'Data Added Successfully');
    }

    public function EditProdukKredit($id)
    {
        $dataAll = $this->KreditModel->get_id_kredit($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Kredit Tidak ditemukan !');
        }
        $data['produk_kredit'] = $dataAll;
        echo view('admin/Kredit/EditProdukKredit', $data);
    }

    public function EditIklanKredit($id)
    {
        $dataAll = $this->KreditModel->get_id_iklan($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Iklan Kredit Tidak ditemukan !');
        }
        $data['iklan_kredit'] = $dataAll;
        echo view('admin/Kredit/EditIklanKredit', $data);
    }

    public function UpdateKredit($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('editor1'),
            'foto' => $this->request->getPost('foto'),
        ];

        $this->KreditModel->update_kredit($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminKredit'));
    }

    public function UpdateIklanKredit($id)
    {
        $data = [
            'foto' => $this->request->getPost('foto'),
        ];

        $this->KreditModel->update_iklankredit($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminKredit'));
    }

    public function DeleteKredit($id)
    {
        $data = $this->KreditModel->get_id_kredit($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kredit Tidak ditemukan !');
        }
        $this->KreditModel->delete_kredit($id);
        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminKredit'));
    }

    public function DeleteIklanKredit($id)
    {
        $data = $this->KreditModel->get_id_iklan($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kredit Tidak ditemukan !');
        }
        $this->KreditModel->delete_Iklankredit($id);
        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminKredit'));
    }
}
