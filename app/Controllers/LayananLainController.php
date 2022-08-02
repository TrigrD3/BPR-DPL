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
        echo view('admin/LayananLain/TambahDeskripsi', $data);
    }

    public function TambahProduk()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('admin/LayananLain/TambahFoto', $data);
    }


    public function AddProduk()
    {
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (is_file('uploads/LayananLain/ProdukLL' . '/' . $fileName)) {
            $fileName = date('YmdHis') . '-' . $fileName;
        }
        $data = [
            'foto' => $fileName,
        ];
        $dataBerkas->move('uploads/LayananLain/ProdukLL', $fileName);
        $this->LayananLainModel->add_Produk($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('adminLayananLainnya'))->with('success', 'Data Added Successfully');
    }


    public function AddPembayaran()
    {
        $data = [
            'deskripsi' => $this->request->getPost('editor1'),
        ];

        $this->LayananLainModel->add_Pembayaran($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambah.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('adminLayananLainnya'))->with('success', 'Data Added Successfully');
    }

    public function EditPembayaran($id)
    {
        $dataAll = $this->LayananLainModel->get_id_pembayaran($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Kredit Tidak ditemukan !');
        }
        $data['layanan_pembayaran'] = $dataAll;
        echo view('admin/LayananLain/EditDeskripsi', $data);
    }


    public function UpdatePembayaran($id)
    {
        $data = [
            'deskripsi' => $this->request->getPost('editor1'),
        ];

        $this->LayananLainModel->update_pembayaran($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('adminLayananLainnya'));
    }

    public function EditProduk($id)
    {
        $dataAll = $this->LayananLainModel->get_id_produk($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Iklan Kredit Tidak ditemukan !');
        }
        $data['layanan_produk'] = $dataAll;
        echo view('admin/LayananLain/EditFoto', $data);
    }

    public function UpdateProduk($id)
    {
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/LayananLain/ProdukLL' . '/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/LayananLain/ProdukLL' . '/' . $this->request->getVar('namafoto'));
                $data = [
                    'foto' => $fileName,
                ];
            } else {
                $data = [
                    'foto' => $fileName,
                ];
            }
            $dataBerkas->move('uploads/LayananLain/ProdukLL', $fileName);
        }

        $this->LayananLainModel->update_produk($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('adminLayananLainnya'));
    }

    public function DeletePembayaran($id)
    {
        $data = $this->LayananLainModel->get_id_pembayaran($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kredit Tidak ditemukan !');
        }
        $this->LayananLainModel->delete_pembayaran($id);
        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil dihapus.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('adminLayananLainnya'));
    }

    public function DeleteProduk($id)
    {
        $data = $this->LayananLainModel->get_id_produk($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kredit Tidak ditemukan !');
        }

        if (is_file('uploads/LayananLain/ProdukLL' . '/' . $data->foto)) {
            unlink('uploads/LayananLain/ProdukLL' . '/' . $data->foto);
        }
        $this->LayananLainModel->delete_produk($id);
        session()->setFlashdata('message', '<div class="alert alert-primary" role="alert">Data berhasil dihapus.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('adminLayananLainnya'));
    }

    //User
    
}
