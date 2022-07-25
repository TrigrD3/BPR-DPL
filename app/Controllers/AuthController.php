<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->AuthModel = new \App\Models\AuthModel();
    }

    public function index()
    {
        if ($this->session->get('username')) {
            return redirect()->to(base_url('Admin'));
        }

        $data = [
            'title' => 'Login',
            'css' => 'Style',
            'font' => 'font',

        ];
        echo view('Admin/Login', $data);
    }

    public function process()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $this->AuthModel->where([
            'username' => $username,
        ])->get()->getRow();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'name' => $dataUser->nama,
                    'level' => $dataUser->level,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('Admin'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('Login'));
    }
}
