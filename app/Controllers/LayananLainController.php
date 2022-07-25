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

    public function TambahDeskripsiLL()
    {
        $data = [
            'title' => 'Edit Deskripsi Layanan Lainnya',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('admin/LayananLain/TambahDeskripsi', $data);
    }
    public function TambahFotoLL()
    {
        $data = [
            'title' => 'Tambah Foto Layanan Lainnya',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('admin/LayananLain/TambahFoto', $data);
    }
    public function AddDeskripsiLL()
    {
        $data = [
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        $this->LayananLainModel->add_deskripsill($data);
        session()->setFlashdata('message', 'Tambah Layanan Lainnya Berhasil');
        return redirect()->to(base_url('AdminLayananLainnya'))->with('success', 'Data Added Successfully');
    }

    public function AddFotoLL()
    {
        $data = [
            'foto' => $this->request->getPost('foto'),
        ];

        $this->LayananLainModel->add_fotoll($data);
        session()->setFlashdata('message', 'Tambah Layanan Lainnya Berhasil');
        return redirect()->to(base_url('AdminLayananLainnya'))->with('success', 'Data Added Successfully');
    }

    public function EditDeskripsiLL($id)
    {
        $dataAll = $this->LayananLainModel->get_id_layananlain($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Layanan Lainnya Tidak ditemukan !');
        }
        $data['deskripsi_layananlain'] = $dataAll;
        echo view('admin/LayananLain/EditDeskripsiLL', $data);
    }

    public function EditFotoLL($id)
    {
        $dataAll = $this->LayananLainModel->get_id_foto($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Iklan Layanan Lainnya Tidak ditemukan !');
        }
        $data['foto_layananlain'] = $dataAll;
        echo view('admin/LayananLain/EditFotoLL', $data);
    }

    public function UpdateDeskripsiLL($id)
    {
        $data = [
            'deskripsi' => $this->request->getPost('editor1'),
        ];

        $this->LayananLainModel->update_layananlain($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminLayananLainnya'));
    }

    public function UpdateFotoLL($id)
    {
        $data = [
            'foto' => $this->request->getPost('foto'),
        ];

        $this->LayananLainModel->update_id_foto($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminLayananLainnya'));
    }

    public function DeleteLayananLain($id)
    {
        $data = $this->LayananLainModel->get_id_layananlain($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Layanan Lain Tidak ditemukan !');
        }
        $this->LayananLainModel->delete_layananlain($id);
        session()->setFlashdata('message', 'Hapus Layanan Lain Berhasil');
        return redirect()->to(base_url('AdminLayananLainnya'));
    }

    public function DeleteIklanLayananLainnya($id)
    {
        $data = $this->LayananLainModel->get_id_iklan($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Layanan Lainnya Tidak ditemukan !');
        }
        $this->LayananLainModel->delete_Iklandeposito($id);
        session()->setFlashdata('message', 'Hapus Iklan Deposito Berhasil');
        return redirect()->to(base_url('AdminLayananLainnya'));
    }
}
