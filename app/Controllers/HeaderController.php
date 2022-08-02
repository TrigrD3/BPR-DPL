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
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (is_file('uploads/Header/Lelang' . '/' . $fileName)) {
            $fileName = date('YmdHis') . '-' . $fileName;
        }
        $data = [
            'google_maps' => $this->request->getPost('google_maps'),
            'foto' => $fileName,
        ];
        $dataBerkas->move('uploads/Header/Lelang', $fileName);

        $this->HeaderModel->add_lelang($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
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
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/Header/Lelang' . '/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/Header/Lelang' . '/' . $this->request->getVar('namafoto'));
                $data = [
                    'foto' => $fileName,
                    'google_maps' => $this->request->getPost('google_maps'),
                ];
            } else {
                $data = [
                    'foto' => $fileName,
                    'google_maps' => $this->request->getPost('google_maps'),
                ];
            }
            $dataBerkas->move('uploads/Header/Lelang', $fileName);
        } else {
            $data = [
                'foto' => $fileName,
                'google_maps' => $this->request->getPost('google_maps'),
            ];
        }

        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();

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
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kredit Tidak ditemukan !');
        }
        if (is_file('uploads/Header/Lelang' . '/' . $data->foto)) {
            unlink('uploads/Header/Lelang' . '/' . $data->foto);
        }
        $this->HeaderModel->delete_lelang($id);
        session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil dihapus.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
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

        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/Header/Loker' . '/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/Header/Loker' . '/' . $this->request->getVar('namafoto'));
                $data = [
                    'foto' => $fileName,
                    'judul' => $this->request->getPost('judul'),
                    'link' => $this->request->getPost('link'),
                    'deskripsi' => $this->request->getPost('editor1'),
                ];
            } else {
                $data = [
                    'foto' => $fileName,
                    'judul' => $this->request->getPost('judul'),
                    'link' => $this->request->getPost('link'),
                    'deskripsi' => $this->request->getPost('editor1'),
                ];
            }
            $dataBerkas->move('uploads/Header/Loker', $fileName);
        } else {
            $data = [
                'judul' => $this->request->getPost('judul'),
                'link' => $this->request->getPost('link'),
                'deskripsi' => $this->request->getPost('editor1'),
            ];
        }


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
        $dataBerkas = $this->request->getFile('file');
        $fileName = $dataBerkas->getName();
        if (is_file('uploads/Header/PAT' . '/' . $fileName)) {
            $fileName = date('YmdHis') . '-' . $fileName;
        }
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tahun' => $this->request->getPost('tahun'),
            'file' => $fileName,
        ];
        $dataBerkas->move('uploads/Header/PAT', $fileName);

        $this->HeaderModel->add_pat($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
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
        $dataBerkas = $this->request->getFile('file');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/Header/PAT' . '/' . $this->request->getVar('namafile'))) {
                unlink('uploads/Header/PAT' . '/' . $this->request->getVar('namafile'));
                $data = [
                    'nama' => $this->request->getPost('nama'),
                    'tahun' => $this->request->getPost('tahun'),
                    'file' => $fileName,
                ];
            } else {
                $data = [
                    'nama' => $this->request->getPost('nama'),
                    'tahun' => $this->request->getPost('tahun'),
                    'file' => $fileName,
                ];
            }
            $dataBerkas->move('uploads/Header/PAT', $fileName);
        } else {
            $data = [
                'nama' => $this->request->getPost('nama'),
                'tahun' => $this->request->getPost('tahun'),
            ];
        }

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
        if (is_file('uploads/Header/PAT' . '/' . $data->file)) {
            unlink('uploads/Header/PAT' . '/' . $data->file);
        }
        $this->HeaderModel->delete_pat($id);
        session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil dihapus.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
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
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (is_file('uploads/Header/Penghargaan' . '/' . $fileName)) {
            $fileName = date('YmdHis') . '-' . $fileName;
        }
        $data = [
            'foto' => $fileName,
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];
        $dataBerkas->move('uploads/Header/Penghargaan', $fileName);

        $this->HeaderModel->add_penghargaan($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
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

        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/Header/Penghargaan' . '/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/Header/Penghargaan' . '/' . $this->request->getVar('namafoto'));
                $data = [
                    'foto' => $fileName,
                    'deskripsi' => $this->request->getPost('deskripsi'),
                ];
            } else {
                $data = [
                    'foto' => $fileName,
                    'deskripsi' => $this->request->getPost('deskripsi'),
                ];
            }
            $dataBerkas->move('uploads/Header/Penghargaan', $fileName);
        } else {
            $data = [
                'deskripsi' => $this->request->getVar('deskripsi'),
            ];
        }

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
        if (is_file('uploads/Header/Penghargaan' . '/' . $data->foto)) {
            unlink('uploads/Header/Penghargaan' . '/' . $data->foto);
        }
        $this->HeaderModel->delete_penghargaan($id);
        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
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
        $dataBerkas = $this->request->getFile('file');
        $fileName = $dataBerkas->getName();
        if (is_file('uploads/Header/Publikasi' . '/' . $fileName)) {
            $fileName = date('YmdHis') . '-' . $fileName;
        }
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tahun' => $this->request->getPost('tahun'),
            'file' => $fileName,
        ];
        $dataBerkas->move('uploads/Header/Publikasi', $fileName);

        $this->HeaderModel->add_publikasi($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
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
        $dataBerkas = $this->request->getFile('file');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/Header/Publikasi' . '/' . $this->request->getVar('namafile'))) {
                unlink('uploads/Header/Publikasi' . '/' . $this->request->getVar('namafile'));
                $data = [
                    'nama' => $this->request->getPost('nama'),
                    'tahun' => $this->request->getPost('tahun'),
                    'file' => $fileName,
                ];
            } else {
                $data = [
                    'nama' => $this->request->getPost('nama'),
                    'tahun' => $this->request->getPost('tahun'),
                    'file' => $fileName,
                ];
            }
            $dataBerkas->move('uploads/Header/Publikasi', $fileName);
        } else {
            $data = [
                'nama' => $this->request->getPost('nama'),
                'tahun' => $this->request->getPost('tahun'),
            ];
        }

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
        if (is_file('uploads/Header/Publikasi' . '/' . $data->file)) {
            unlink('uploads/Header/Publikasi' . '/' . $data->file);
        }
        $this->HeaderModel->delete_publikasi($id);
        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminPublikasi'));
    }

    //user

    public function Loker()
    {
        $data = [
            'title' => 'Loker | BANK LESTARI',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        $data['HeaderLoker'] = $this->HeaderModel->get_all_loker();
        return view('pages/Loker', $data);
    }

    public function Penghargaan()
    {
        $data = [
            'title' => 'Penghargaan | BANK LESTARI',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        $data['HeaderPenghargaan'] = $this->HeaderModel->get_all_penghargaan();
        return view('pages/Penghargaan', $data);
    }

    public function KAP()
    {
        $data = [
            'title' => 'KAP | BANK LESTARI',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        $data['HeaderPAT'] = $this->HeaderModel->get_all_pat_tahun();
        return view('pages/KAP', $data);
    }

    public function Publikasi()
    {
        $data = [
            'title' => 'Publikasi | BANK LESTARI',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        $data['tahun'] = $this->HeaderModel->get_all_tahun();
        echo view('pages/Publikasi', $data);
    }

    public function TahunPublikasi($id)
    {
        $data = [
            'title' => 'Publikasi | BANK LESTARI',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        $data['tahun'] = $this->HeaderModel->get_all_tahun();
        $data['jumlah'] = $this->HeaderModel->get_all_tahun_publikasi_jumlah($id);
        $data['file'] = $this->HeaderModel->get_all_tahun_publikasi($id);
        // print_r($data['file']);
        echo view('pages/Publikasi', $data);
    }

    public function Lelang()
    {
        $data = [
            'title' => 'Lelang | BANK LESTARI',
            'css' => 'Lelang',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        $data['HeaderLelang'] = $this->HeaderModel->get_all_lelang();
        $data['RowLelang'] = $this->HeaderModel->get_row_lelang();
        echo view('pages/Lelang', $data);
    }
}
