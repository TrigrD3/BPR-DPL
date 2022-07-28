<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DepositoController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->DepositoModel = new \App\Models\DepositoModel();
        // if(!$this->session->userdata('email')){
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Login terlebih dahulu!</div>');
        //     redirect('auth/');
        // }
    }

    public function index()
    {
        $data = [
            'title' => 'Admin Deposito',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['DepositoProduk'] = $this->DepositoModel->get_all_produk();
        $data['DepositoIklan'] = $this->DepositoModel->get_all_iklan();
        $data['DepositoForm'] = $this->DepositoModel->get_all_form();
        return view('Admin/Deposito/AdminDeposito', $data);
    }

    public function TambahProdukDeposito()
    {
        $data = [
            'title' => 'Edit',
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

    public function AddIklanDeposito()
    {
        $data = [
            'foto' => $this->request->getPost('foto'),
        ];

        $this->DepositoModel->add_iklandeposito($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminDeposito'))->with('success', 'Data Added Successfully');
    }


    public function AddDeposito()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('editor1'),
            'foto' => $this->request->getPost('foto'),
        ];

        $this->DepositoModel->add_deposito($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminDeposito'))->with('success', 'Data Added Successfully');
    }

    public function EditProdukDeposito($id)
    {
        $dataAll = $this->DepositoModel->get_id_deposito($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Deposito Tidak ditemukan !');
        }
        $data['produk_deposito'] = $dataAll;
        echo view('admin/Deposito/EditProdukDeposito', $data);
    }

    public function EditIklanDeposito($id)
    {
        $dataAll = $this->DepositoModel->get_id_iklan($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Iklan Deposito Tidak ditemukan !');
        }
        $data['iklan_deposito'] = $dataAll;
        echo view('admin/Deposito/EditIklanDeposito', $data);
    }

    public function UpdateDeposito($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('editor1'),
            'foto' => $this->request->getPost('foto'),
        ];

        $this->DepositoModel->update_deposito($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminDeposito'));
    }

    public function UpdateIklanDeposito($id)
    {
        $data = [
            'foto' => $this->request->getPost('foto'),
        ];

        $this->DepositoModel->update_iklandeposito($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminDeposito'));
    }

    public function DeleteDeposito($id)
    {
        $data = $this->DepositoModel->get_id_deposito($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Deposito Tidak ditemukan !');
        }
        $this->DepositoModel->delete_deposito($id);
        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminDeposito'));
    }

    public function DeleteIklanDeposito($id)
    {
        $data = $this->DepositoModel->get_id_iklan($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Deposito Tidak ditemukan !');
        }
        $this->DepositoModel->delete_Iklandeposito($id);
        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminDeposito'));
    }
    public function EditFormDeposito($id)
    {
        $dataAll = $this->DepositoModel->get_id_form($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Form Deposito Tidak ditemukan !');
        }
        $data['form_deposito'] = $dataAll;
        echo view('admin/Deposito/EditFormDeposito', $data);
    }

    public function UpdateFormDeposito($id)
    {
        $data = [
            'g_form' => $this->request->getPost('g_form'),
        ];

        $this->DepositoModel->update_formdeposito($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminDeposito'));
    }
}
