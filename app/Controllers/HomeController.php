<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->HomeModel = new \App\Models\HomeModel();
        // if(!$this->session->userdata('email')){
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Login terlebih dahulu!</div>');
        //     redirect('auth/');
        // }

    }

    public function index()
    {
        $data = [
            'title' => 'Admin Home',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['HomeBerita'] = $this->HomeModel->get_all_berita();
        $data['HomeIklan'] = $this->HomeModel->get_all_iklan();
        $data['HomeDeskripsiWebsite'] = $this->HomeModel->get_all_deskripsi_website();
        return view('Admin/Home/AdminHome', $data);
    }

    public function TambahBerita()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Home/TambahBerita', $data);
    }

    public function AddBerita()
    {
        $data = [
            'foto' => $this->request->getPost('foto'),
            'judul' => $this->request->getPost('judul'),
            'tanggal' => $this->request->getPost('tanggal'),
            'isi_berita' => $this->request->getPost('editor1'),
        ];

        $this->HomeModel->add_berita($data);

        session()->setFlashdata('message', 'Tambah Berita Berhasil');
        return redirect()->to(base_url('AdminHome'))->with('success', 'Data Added Successfully');
    }

    public function EditBerita($id)
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',
        ];
        $dataAll = $this->HomeModel->get_id_berita($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pegawai Tidak ditemukan !');
        }
        $data['berita'] = $dataAll;
        echo view('admin/Home/EditBerita', $data);
    }

    public function UpdateBerita($id)
    {
        $data = [
            'foto' => $this->request->getPost('foto'),
            'judul' => $this->request->getPost('judul'),
            'tanggal' => $this->request->getPost('tanggal'),
            'isi_berita' => $this->request->getPost('editor1'),
        ];

        $this->HomeModel->update_berita($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminHome'));
    }

    public function DeleteBerita($id)
    {
        $data = $this->HomeModel->get_id_berita($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Berita Tidak ditemukan !');
        }
        $this->HomeModel->delete_berita($id);
        session()->setFlashdata('message', 'Hapus Berita Berhasil');
        return redirect()->to(base_url('AdminHome'));
    }
}
