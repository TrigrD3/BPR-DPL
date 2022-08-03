<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AkunController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->AkunModel = new \App\Models\AkunModel();
        // if(!$this->session->userdata('email')){
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Login terlebih dahulu!</div>');
        //     redirect('auth/');
        // }

    }

    public function index()
    {
        $data = [
            'title' => 'Admin Akun',
            'css' => 'Style',
            'font' => 'font',
        ];
        $data['Akun'] = $this->AkunModel->get_all_akun();
        return view('Admin/User/AdminUser', $data);
    }

    public function TambahUser()
    {
        $data = [
            'title' => 'Admin Tambah Akun',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('admin/User/TambahUser', $data);
    }

    public function AddUser()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
        ];

        $this->AkunModel->add_user($data);

        session()->setFlashdata('message', 'Tambah User Berhasil');
        return redirect()->to(base_url('AdminUser'))->with('success', 'Data Added Successfully');
    }

    public function EditUser($id)
    {

        $dataAll = $this->AkunModel->get_id_user($id);
        if (empty($dataAll)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data User Tidak ditemukan !');
        }
        $data['Akun'] = $dataAll;
        echo view('admin/User/EditUser', $data);
    }

    public function UpdateUser($id)
    {
        $password = $this->AkunModel->get_id_user($id);
        $pass = "";
        if ($password->password == $this->request->getPost('password')) {
            $pass = $password->password;
        } else {
            $pass = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT);
        }
        $data = [
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            'password' => $pass,
        ];

        $this->AkunModel->update_user($id, $data);

        $this->session->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        return redirect()->to(base_url('AdminUser'));
    }

    public function DeleteUser($id)
    {
        $data = $this->AkunModel->get_id_user($id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User Tidak ditemukan !');
        }
        $this->AkunModel->delete_user($id);
        session()->setFlashdata('message', '<div class="alert alert-warning" role="alert">Data berhasil diedit.
        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        return redirect()->to(base_url('AdminUser'));
    }
}
