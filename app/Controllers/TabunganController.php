<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TabunganController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->TabunganModel = new \App\Models\TabunganModel();
        // if(!$this->session->userdata('email')){
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Login terlebih dahulu!</div>');
        //     redirect('auth/');
        // }

    }

    public function index()
    {
        $data = [
            'title' => 'Admin Tabungan',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['TabunganProduk'] = $this->TabunganModel->get_all_produk();
        $data['TabunganIklan'] = $this->TabunganModel->get_all_iklan();
        return view('Admin/Tabungan/AdminTabungan', $data);
    }

    public function TambahProdukTabungan()
    {
        $data = [
            'title' => 'Edit',
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

    public function AddIklanTabungan()
    {
        $data = [
            'foto' => $this->request->getPost('foto'),
        ];

        $this->TabunganModel->add_iklantabungan($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminTabungan'))->with('success', 'Data Added Successfully');
    }


    public function AddTabungan()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('editor1'),
            'foto' => $this->request->getPost('foto'),
        ];

        $this->TabunganModel->add_tabungan($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminTabungan'))->with('success', 'Data Added Successfully');
    }

    public function EditProdukTabungan($id)
    {
        $dataAll = $this->TabunganModel->get_id_tabungan($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Tabungan Tidak ditemukan !');
        }
        $data['produk_tabungan'] = $dataAll;
        echo view('admin/Tabungan/EditProdukTabungan', $data);
    }

    public function EditIklanTabungan($id)
    {
        $dataAll = $this->TabunganModel->get_id_iklan($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Iklan Tabungan Tidak ditemukan !');
        }
        $data['iklan_tabungan'] = $dataAll;
        echo view('admin/Tabungan/EditIklanTabungan', $data);
    }

    public function UpdateTabungan($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('editor1'),
            'foto' => $this->request->getPost('foto'),
        ];

        $this->TabunganModel->update_tabungan($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminTabungan'));
    }

    public function UpdateIklanTabungan($id)
    {
        $data = [
            'foto' => $this->request->getPost('foto'),
        ];

        $this->TabunganModel->update_iklantabungan($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminTabungan'));
    }

    public function DeleteTabungan($id)
    {
        $data = $this->TabunganModel->get_id_tabungan($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Tabungan Tidak ditemukan !');
        }
        $this->TabunganModel->delete_tabungan($id);
        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminTabungan'));
    }

    public function DeleteIklanTabungan($id)
    {
        $data = $this->TabunganModel->get_id_iklan($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Tabungan Tidak ditemukan !');
        }
        $this->TabunganModel->delete_Iklantabungan($id);
        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminTabungan'));
    }
}
