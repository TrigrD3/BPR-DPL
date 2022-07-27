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

    public function TambahLelang()
    {
        $data = [
            'title' => 'Edit Lelang',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('admin/Header/Lelang/TambahLelang', $data);
    }
    public function AddLelang()
    {
        $data = [
            'foto' => $this->request->getPost('foto'),
            'google_maps' => $this->request->getPost('google_maps'),
        ];

        $this->HeaderModel->add_lelang($data);

        session()->setFlashdata('message', 'Tambah Lelang Berhasil');
        return redirect()->to(base_url('adminLelang'))->with('success', 'Data Added Successfully');
    }
    public function EditLelang($id)
    {
        $dataAll = $this->HeaderModel->get_id_lelang($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Tabungan Tidak ditemukan !');
        }
        $data['header_lelang'] = $dataAll;
        echo view('admin/Header/Lelang/EditLelang', $data);
    }
    public function UpdateLelang($id)
    {
        $data = [
            'foto' => $this->request->getPost('foto'),
            'google_maps' => $this->request->getPost('google_maps'),
        ];

        $this->HeaderModel->update_lelang($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('adminLelang'));
    }
    public function DeleteLelang($id)
    {
        $data = $this->HeaderModel->get_id_lelang($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Lelang Tidak ditemukan !');
        }
        $this->HeaderModel->delete_lelang($id);
        session()->setFlashdata('message', 'Hapus Lelang Berhasil');
        return redirect()->to(base_url('adminLelang'));
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
    public function EditLoker($id)
    {
        $dataAll = $this->HeaderModel->get_id_loker($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Loker Tidak ditemukan !');
        }
        $data['header_loker'] = $dataAll;
        echo view('Admin/Header/Loker/EditLoker', $data);
    }

    public function UpdateLoker($id)
    {
        $data = [
            'foto' => $this->request->getPost('deskripsi'),
            'judul' => $this->request->getPost('judul'),
            'link' => $this->request->getPost('link'),
            'deskripsi' => $this->request->getPost('editor1'),
        ];

        $this->HeaderModel->update_loker($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminLoker'));
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
    public function TambahPAT()
    {
        $data = [
            'title' => 'Edit PAT',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('admin/Header/PAT/TambahPAT', $data);
    }
    public function AddPAT()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tahun' => $this->request->getPost('tahun'),
            'file' => $this->request->getPost('file'),
        ];

        $this->HeaderModel->add_pat($data);

        session()->setFlashdata('message', 'Tambah PAT Berhasil');
        return redirect()->to(base_url('AdminPAT'))->with('success', 'Data Added Successfully');
    }
    public function EditPAT($id)
    {
        $dataAll = $this->HeaderModel->get_id_pat($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Tabungan Tidak ditemukan !');
        }
        $data['header_pat'] = $dataAll;
        echo view('admin/Header/PAT/EditPAT', $data);
    }
    public function UpdatePAT($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'file' => $this->request->getPost('file'),
            'tahun' => $this->request->getPost('tahun'),
        ];

        $this->HeaderModel->update_pat($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminPAT'));
    }
    public function DeletePAT($id)
    {
        $data = $this->HeaderModel->get_id_pat($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('PAT Tidak ditemukan !');
        }
        $this->HeaderModel->delete_pat($id);
        session()->setFlashdata('message', 'Hapus PAT Berhasil');
        return redirect()->to(base_url('AdminPAT'));
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
    public function TambahPenghargaan()
    {
        $data = [
            'title' => 'Edit Penghargaan',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('admin/Header/Penghargaan/TambahPenghargaan', $data);
    }
    public function AddPenghargaan()
    {
        $data = [
            'foto' => $this->request->getPost('foto'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        $this->HeaderModel->add_penghargaan($data);

        session()->setFlashdata('message', 'Tambah Penghargaan Berhasil');
        return redirect()->to(base_url('adminPenghargaan'))->with('success', 'Data Added Successfully');
    }
    public function EditPenghargaan($id)
    {
        $dataAll = $this->HeaderModel->get_id_penghargaan($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Tabungan Tidak ditemukan !');
        }
        $data['header_penghargaan'] = $dataAll;
        echo view('admin/Header/Penghargaan/EditPenghargaan', $data);
    }
    public function UpdatePenghargaan($id)
    {
        $data = [
            'foto' => $this->request->getPost('foto'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        $this->HeaderModel->update_penghargaan($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('adminPenghargaan'));
    }
    public function DeletePenghargaan($id)
    {
        $data = $this->HeaderModel->get_id_penghargaan($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Penghargaan Tidak ditemukan !');
        }
        $this->HeaderModel->delete_penghargaan($id);
        session()->setFlashdata('message', 'Hapus Penghargaan Berhasil');
        return redirect()->to(base_url('adminPenghargaan'));
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

    public function TambahPublikasi()
    {
        $data = [
            'title' => 'Edit Publikasi',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('admin/Header/Publikasi/TambahPublikasi', $data);
    }
    public function AddPublikasi()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tahun' => $this->request->getPost('tahun'),
            'file' => $this->request->getPost('file'),
        ];

        $this->HeaderModel->add_publikasi($data);

        session()->setFlashdata('message', 'Tambah Publikasi Berhasil');
        return redirect()->to(base_url('AdminPublikasi'))->with('success', 'Data Added Successfully');
    }
    public function EditPublikasi($id)
    {
        $dataAll = $this->HeaderModel->get_id_publikasi($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Tabungan Tidak ditemukan !');
        }
        $data['header_publikasi'] = $dataAll;
        echo view('admin/Header/Publikasi/EditPublikasi', $data);
    }
    public function UpdatePublikasi($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'file' => $this->request->getPost('file'),
            'tahun' => $this->request->getPost('tahun'),
        ];

        $this->HeaderModel->update_publikasi($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminPublikasi'));
    }
    public function DeletePublikasi($id)
    {
        $data = $this->HeaderModel->get_id_publikasi($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Publikasi Tidak ditemukan !');
        }
        $this->HeaderModel->delete_publikasi($id);
        session()->setFlashdata('message', 'Hapus Publikasi Berhasil');
        return redirect()->to(base_url('AdminPublikasi'));
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
