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
        $data['TabunganForm'] = $this->TabunganModel->get_all_form();
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
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (is_file('uploads/Tabungan/Iklan' . '/' . $fileName)) {
            $fileName = date('YmdHis') . '-' . $fileName;
        }
        $data = [
            'foto' => $fileName,
        ];

        $dataBerkas->move('uploads/Tabungan/Iklan', $fileName);

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
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (is_file('uploads/Tabungan/Produk' . '/' . $fileName)) {
            $fileName = date('YmdHis') . '-' . $fileName;
        }
        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('editor1'),
            'foto' => $fileName,
        ];

        $dataBerkas->move('uploads/Tabungan/Produk', $fileName);
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
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/Tabungan/Produk' . '/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/Tabungan/Produk' . '/' . $this->request->getVar('namafoto'));
                $data = [
                    'nama' => $this->request->getVar('nama'),
                    'deskripsi' => $this->request->getVar('editor1'),
                    'foto' => $fileName,
                ];
            } else {
                $data = [
                    'nama' => $this->request->getVar('nama'),
                    'deskripsi' => $this->request->getVar('editor1'),
                    'foto' => $fileName,
                ];
            }
            $dataBerkas->move('uploads/Tabungan/Produk', $fileName);
        } else {
            $data = [
                'nama' => $this->request->getVar('nama'),
                'deskripsi' => $this->request->getVar('editor1'),
            ];
        }

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
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/Tabungan/Iklan' . '/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/Tabungan/Iklan' . '/' . $this->request->getVar('namafoto'));
                $data = [
                    'foto' => $fileName,
                ];
            } else {
                $data = [
                    'foto' => $fileName,
                ];
            }
            $dataBerkas->move('uploads/Tabungan/Iklan', $fileName);
        }

        $this->TabunganModel->update_iklantabungan($id, $data);
        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diupdate.
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
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kredit Tidak ditemukan !');
        }
        if (is_file('uploads/Tabungan/Produk' . '/' . $data->foto)) {
            unlink('uploads/Tabungan/Produk' . '/' . $data->foto);
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
        if (is_file('uploads/Tabungan/Produk' . '/' . $data->foto)) {
            unlink('uploads/Tabungan/Produk' . '/' . $data->foto);
        }
        $this->TabunganModel->delete_Iklantabungan($id);
        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminTabungan'));
    }

    public function EditFormTabungan($id)
    {
        $dataAll = $this->TabunganModel->get_id_form($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Tabungan Tidak ditemukan !');
        }
        if (is_file('uploads/Tabungan/Iklan' . '/' . $data->foto)) {
            unlink('uploads/Tabungan/Iklan' . '/' . $data->foto);
        }
        $data['form_tabungan'] = $dataAll;
        echo view('admin/Tabungan/EditFormTabungan', $data);
    }

    public function UpdateFormTabungan($id)
    {
        $data = [
            'g_form' => $this->request->getPost('g_form'),
        ];

        $this->TabunganModel->update_formtabungan($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminTabungan'));
    }
}
