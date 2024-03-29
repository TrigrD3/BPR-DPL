<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KreditController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->KreditModel = new \App\Models\KreditModel();
        // if(!$this->session->userdata('email')){
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Login terlebih dahulu!</div>');
        //     redirect('auth/');
        // }

    }

    public function index()
    {
        $data = [
            'title' => 'Admin Kredit',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['KreditProduk'] = $this->KreditModel->get_all_produk();
        $data['KreditIklan'] = $this->KreditModel->get_all_iklan();
        $data['KreditForm'] = $this->KreditModel->get_all_form();
        return view('Admin/Kredit/AdminKredit', $data);
    }

    public function TambahProdukKredit()
    {
        $data = [
            'title' => 'Edit',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('admin/Kredit/TambahProdukKredit', $data);
    }

    public function TambahIklanKredit()
    {
        $data = [
            'title' => 'Admin Kredit',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('admin/kredit/TambahIklanKredit', $data);
    }

    public function AddIklanKredit()
    {
        $data = [
            'foto' => $this->request->getPost('foto'),
        ];

        $this->KreditModel->add_iklankredit($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminKredit'))->with('success', 'Data Added Successfully');
    }


    public function AddKredit()
    {
        $dataBerkasDepan = $this->request->getFile('foto_depan');
        $fileNameDepan = $dataBerkasDepan->getName();
        if (is_file('uploads/Kredit/ProdukKredit' . '/' . $fileNameDepan)) {
            $fileNameDepan = date('YmdHis') . '-' . $fileNameDepan;
        }
        $dataBerkasDepan->move('uploads/Kredit/ProdukKredit', $fileNameDepan);

        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (is_file('uploads/Kredit/ProdukKredit' . '/' . $fileName)) {
            $fileName = date('YmdHis') . '-' . $fileName;
        }
        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('editor1'),
            'foto_depan' => $fileNameDepan,
            'foto' => $fileName,
        ];
        $dataBerkas->move('uploads/Kredit/ProdukKredit', $fileName);
        $this->KreditModel->add_kredit($data);

        session()->setFlashdata('message', '<div class="alert alert-info" role="alert">Data berhasil ditambahkan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminKredit'))->with('success', 'Data Added Successfully');
    }
    public function EditProdukKredit($id)
    {
        $dataAll = $this->KreditModel->get_id_kredit($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Kredit Tidak ditemukan !');
        }
        $data['produk_kredit'] = $dataAll;
        echo view('admin/Kredit/EditProdukKredit', $data);
    }

    public function EditIklanKredit($id)
    {
        $dataAll = $this->KreditModel->get_id_iklan($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Iklan Kredit Tidak ditemukan !');
        }
        $data['iklan_kredit'] = $dataAll;
        echo view('admin/Kredit/EditIklanKredit', $data);
    }

    public function UpdateKredit($id)
    {
        $data = [
            'nama' => $this->request->getVar('nama'),
            'deskripsi' => $this->request->getVar('editor1'),
        ];
        $dataBerkasDepan = $this->request->getFile('foto_depan');
        $fileNameDepan = $dataBerkasDepan->getName();
        if (!empty($fileNameDepan)) {
            if (is_file('uploads/Kredit/ProdukKredit' . '/' . $this->request->getVar('namafoto_depan'))) {
                unlink('uploads/Kredit/ProdukKredit' . '/' . $this->request->getVar('namafoto_depan'));
                $data['foto_depan'] = $fileNameDepan;
            } else {
                $data['foto_depan'] = $fileNameDepan;
            }
            $dataBerkasDepan->move('uploads/Kredit/ProdukKredit', $fileNameDepan);
        }

        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/Kredit/ProdukKredit' . '/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/Kredit/ProdukKredit' . '/' . $this->request->getVar('namafoto'));
                $data['foto'] = $fileName;
            } else {
                $data['foto'] = $fileName;
            }
            $dataBerkas->move('uploads/Kredit/ProdukKredit', $fileName);
        }

        $this->KreditModel->update_kredit($id, $data);
        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diupdate.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminKredit'));
    }

    public function UpdateIklanKredit($id)
    {
        $dataBerkas = $this->request->getFile('foto');
        $fileName = $dataBerkas->getName();
        if (!empty($fileName)) {
            if (is_file('uploads/Kredit/IklanKredit' . '/' . $this->request->getVar('namafoto'))) {
                unlink('uploads/Kredit/IklanKredit' . '/' . $this->request->getVar('namafoto'));
                $data = [
                    'foto' => $fileName,
                ];
            } else {
                $data = [
                    'foto' => $fileName,
                ];
            }
            $dataBerkas->move('uploads/Kredit/IklanKredit', $fileName);
        }

        $this->KreditModel->update_iklankredit($id, $data);
        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diupdate.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');


        return redirect()->to(base_url('AdminKredit'));
    }

    public function DeleteKredit($id)
    {
        $data = $this->KreditModel->get_id_kredit($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kredit Tidak ditemukan !');
        }
        if (is_file('uploads/Kredit/ProdukKredit' . '/' . $data->foto)) {
            unlink('uploads/Kredit/ProdukKredit' . '/' . $data->foto);
        }
        if (is_file('uploads/Kredit/ProdukKredit' . '/' . $data->foto_depan)) {
            unlink('uploads/Kredit/ProdukKredit' . '/' . $data->foto_depan);
        }
        $this->KreditModel->delete_kredit($id);
        session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil dihapus.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminKredit'));
    }

    public function DeleteIklanKredit($id)
    {
        $data = $this->KreditModel->get_id_iklan($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kredit Tidak ditemukan !');
        }
        if (is_file('uploads/Kredit/IklanKredit' . '/' . $data->foto)) {
            unlink('uploads/Kredit/IklanKredit' . '/' . $data->foto);
        }
        $this->KreditModel->delete_Iklankredit($id);
        session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil dihapuskan.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminKredit'));
    }

    public function EditFormKredit($id)
    {
        $dataAll = $this->KreditModel->get_id_form($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Form Kredit Tidak ditemukan !');
        }
        $data['form_kredit'] = $dataAll;
        echo view('admin/Kredit/EditFormKredit', $data);
    }

    public function UpdateFormKredit($id)
    {
        $data = [
            'g_form' => $this->request->getPost('g_form'),
        ];

        $this->KreditModel->update_formkredit($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminKredit'));
    }

    // User
    public function Kredit()
    {
        $data = [
            'title' => 'Kredit | BANK LESTARI',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        $data['KreditProduk'] = $this->KreditModel->get_all_produk();
        $data['KreditIklan'] = $this->KreditModel->get_all_iklan();
        echo view('pages/Kredit', $data);
    }

    public function LihatIklanKredit($id)
    {
        $data = [
            'title' => 'Produk Kredit | BANK LESTARI',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        $dataAll = $this->KreditModel->get_id_kredit($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Iklan Kredit Tidak ditemukan !');
        }
        $data['KreditForm'] = $this->KreditModel->get_all_form();
        $data['iklan_kredit'] = $dataAll;
        echo view('pages/ProdukKredit', $data);
    }
}
