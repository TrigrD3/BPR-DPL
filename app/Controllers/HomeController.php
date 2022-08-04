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
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (is_file('uploads/Home/Berita' . '/' . $fileName)) {
            $fileName = date('YmdHis') . '-' . $fileName;
        }
        $data = [
            'foto' => $fileName,
            'judul' => $this->request->getPost('judul'),
            'tanggal' => $this->request->getPost('tanggal'),
            'isi_berita' => $this->request->getPost('editor1'),
        ];

        $dataBerkas->move('uploads/Home/Berita', $fileName);

        $this->HomeModel->add_berita($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminHome'))->with('success', 'Data Added Successfully');
    }

    public function EditBerita($id)
    {
        $dataAll = $this->HomeModel->get_id_berita($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Berita Tidak ditemukan !');
        }
        $data['berita'] = $dataAll;
        echo view('admin/Home/EditBerita', $data);
    }

    public function UpdateBerita($id)
    {
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/Home/Berita' . '/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/Home/Berita' . '/' . $this->request->getVar('namafoto'));
                $data = [
                    'foto' => $fileName,
                    'judul' => $this->request->getPost('judul'),
                    'tanggal' => $this->request->getPost('tanggal'),
                    'isi_berita' => $this->request->getPost('editor1'),
                ];
            } else {
                $data = [
                    'foto' => $fileName,
                    'judul' => $this->request->getPost('judul'),
                    'tanggal' => $this->request->getPost('tanggal'),
                    'isi_berita' => $this->request->getPost('editor1'),
                ];
            }
            $dataBerkas->move('uploads/Home/Berita', $fileName);
        } else {
            $data = [
                'judul' => $this->request->getPost('judul'),
                'tanggal' => $this->request->getPost('tanggal'),
                'isi_berita' => $this->request->getPost('editor1'),
            ];
        }

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
        if (is_file('uploads/Home/Berita/' . $data->foto)) {
            unlink('uploads/Home/Berita/' . $data->foto);
        }
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Berita Tidak ditemukan !');
        }
        $this->HomeModel->delete_berita($id);
        session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil dihapus.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminHome'));
    }

    public function TambahIklan()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Home/TambahIklan', $data);
    }

    public function AddIklan()
    {
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (is_file('uploads/Home/Iklan/' . $fileName)) {
            $fileName = date('YmdHis') . '-' . $fileName;
        }
        $data = [
            'foto' => $fileName,
        ];
        $dataBerkas->move('uploads/Home/Iklan/', $fileName);


        $this->HomeModel->add_iklan($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminHome'))->with('success', 'Data Added Successfully');
    }

    public function EditIklan($id)
    {

        $dataAll = $this->HomeModel->get_id_iklan($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Iklan Tidak ditemukan !');
        }
        $data['iklan'] = $dataAll;
        echo view('admin/Home/EditIklan', $data);
    }

    public function UpdateIklan($id)
    {
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/Home/Iklan/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/Home/Iklan/' . $this->request->getVar('namafoto'));
                $data = [
                    'foto' => $fileName,
                ];
            } else {
                $data = [
                    'foto' => $fileName,
                ];
            }
            $dataBerkas->move('uploads/Home/Iklan/', $fileName);
        }

        $this->HomeModel->update_iklan($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminHome'));
    }

    public function DeleteIklan($id)
    {
        $data = $this->HomeModel->get_id_iklan($id);
        if (is_file('uploads/Home/Iklan/' . $data->foto)) {
            unlink('uploads/Home/Iklan/' . $data->foto);
        }
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Iklan Tidak ditemukan !');
        }
        $this->HomeModel->delete_iklan($id);
        session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil dihapus.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminHome'));
    }


    public function EditDeskripsiWebsite($id)
    {
        $dataAll = $this->HomeModel->get_id_deskripsi_website($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Deskripsi Web Tidak ditemukan !');
        }
        $data['deskripsi'] = $dataAll;
        echo view('admin/Home/EditDeskripsiWebsite', $data);
    }

    public function UpdateDeskripsiWebsite($id)
    {
        $data = [
            'deskripsi' => $this->request->getPost('editor1'),
        ];

        $this->HomeModel->update_deskripsi_website($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminHome'));
    }

    // User
    public function indexUser()
    {
        $data = [
            'title' => 'Index | BANK LESTARI',
            'css' => 'index',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        $data['NewsBerita'] = $this->HomeModel->get_news_berita();
        $data['NewesBerita'] = $this->HomeModel->get_newes_berita();
        $data['HomeIklan'] = $this->HomeModel->get_all_iklan();
        $data['HomeDeskripsiWebsite'] = $this->HomeModel->get_all_deskripsi_website();
        echo view('pages/index', $data);
    }

    public function LihatBerita($id)
    {
        $data = [
            'title' => 'Berita | BANK LESTARI',
            'css' => 'index',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        $dataAll = $this->HomeModel->get_id_berita($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Berita Tidak ditemukan !');
        }
        $data['berita'] = $dataAll;
        $data['RandomBerita'] = $this->HomeModel->get_rand_berita();
        echo view('pages/Berita', $data);
    }

    public function PusatBerita()
    {
        $data = [
            'title' => 'Pusat Berita | BANK LESTARI',
            'css' => 'index',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        $data['HomeBerita'] = $this->HomeModel->get_all_pusatberita();
        echo view('pages/PusatBerita', $data);
    }
}
