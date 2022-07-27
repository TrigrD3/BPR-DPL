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
    public function TambahAlamat()
    {
        $data = [
            'title' => 'Edit Alamat',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('admin/TentangLestari/Alamat/Tambah', $data);
    }
    public function AddAlamat()
    {
        $data = [
            'kabupaten_kota' => $this->request->getPost('kabupaten_kota'),
            'alamat' => $this->request->getPost('alamat'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
            'google_maps' => $this->request->getPost('google_maps'),
            'foto' => $this->request->getPost('foto'),
        ];

        $this->TentangLestariModel->add_alamat($data);

        session()->setFlashdata('message', 'Tambah Tabungan Berhasil');
        return redirect()->to(base_url('AdminAlamat'))->with('success', 'Data Added Successfully');
    }
    public function EditAlamat($id)
    {
        $dataAll = $this->TentangLestariModel->get_id_alamat($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Tabungan Tidak ditemukan !');
        }
        $data['tentang_alamat_kantor'] = $dataAll;
        echo view('admin/TentangLestari/Alamat/Edit', $data);
    }
    public function UpdateAlamat($id)
    {
        $data = [
            'kabupaten_kota' => $this->request->getPost('kabupaten_kota'),
            'alamat' => $this->request->getPost('alamat'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
            'google_maps' => $this->request->getPost('google_maps'),
            'foto' => $this->request->getPost('foto'),
        ];

        $this->TentangLestariModel->update_alamat($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminAlamat'));
    }
    public function DeleteAlamat($id)
    {
        $data = $this->TentangLestariModel->get_id_alamat($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Alamat Tidak ditemukan !');
        }
        $this->TentangLestariModel->delete_alamat($id);
        session()->setFlashdata('message', 'Hapus Alamat Berhasil');
        return redirect()->to(base_url('AdminAlamat'));
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

    public function EditVisiMisi($id)
    {
        $dataAll = $this->TentangLestariModel->get_id_visimisi($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data VisiMisi Tidak ditemukan !');
        }
        $data['tentang_visimisi'] = $dataAll;
        echo view('Admin/TentangLestari/VisiMisi/Edit', $data);
    }

    public function UpdateVisiMisi($id)
    {
        $data = [
            'visi' => $this->request->getPost('editor1'),
            'Misi' => $this->request->getPost('editor2'),
        ];

        $this->TentangLestariModel->update_visimisi($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('adminVisiMisi'));
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

    public function EditStrukturOrganisasi($id)
    {
        $dataAll = $this->TentangLestariModel->get_id_strukturorganisasi($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data StrukturOrganisasi Tidak ditemukan !');
        }
        $data['tentang_strukturorganisasi'] = $dataAll;
        echo view('Admin/TentangLestari/StrukturOrganisasi/Edit', $data);
    }

    public function UpdateStrukturOrganisasi($id)
    {
        $data = [
            'foto' => $this->request->getPost('foto'),
        ];

        $this->TentangLestariModel->update_strukturorganisasi($id, $data);
        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('adminStrukturOrganisasi'));
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
    public function EditProfil($id)
    {
        $dataAll = $this->TentangLestariModel->get_id_profil($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Profil Tidak ditemukan !');
        }
        $data['tentang_profil'] = $dataAll;
        echo view('Admin/TentangLestari/Profil/Edit', $data);
    }

    public function UpdateProfil($id)
    {
        $data = [
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('editor1'),
        ];

        $this->TentangLestariModel->update_profil($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminProfil'));
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
    public function TambahSejarah()
    {
        $data = [
            'title' => 'Edit Sejarah',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('admin/TentangLestari/Sejarah/Tambah', $data);
    }
    public function AddSejarah()
    {
        $data = [
            'judul' => $this->request->getPost('judul'),
            'tanggal' => $this->request->getPost('tanggal'),
            'deskripsi' => $this->request->getPost('editor1'),
        ];

        $this->TentangLestariModel->add_sejarah($data);

        session()->setFlashdata('message', 'Tambah Tabungan Berhasil');
        return redirect()->to(base_url('AdminSejarah'))->with('success', 'Data Added Successfully');
    }
    public function EditSejarah($id)
    {
        $dataAll = $this->TentangLestariModel->get_id_sejarah($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Tabungan Tidak ditemukan !');
        }
        $data['tentang_sejarah'] = $dataAll;
        echo view('admin/TentangLestari/Sejarah/Edit', $data);
    }
    public function UpdateSejarah($id)
    {
        $data = [
            'judul' => $this->request->getPost('judul'),
            'tanggal' => $this->request->getPost('tanggal'),
            'deskripsi' => $this->request->getPost('editor1'),
        ];

        $this->TentangLestariModel->update_sejarah($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminSejarah'));
    }
    public function DeleteSejarah($id)
    {
        $data = $this->TentangLestariModel->get_id_sejarah($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Sejarah Tidak ditemukan !');
        }
        $this->TentangLestariModel->delete_sejarah($id);
        session()->setFlashdata('message', 'Hapus Sejarah Berhasil');
        return redirect()->to(base_url('AdminSejarah'));
    }
}
