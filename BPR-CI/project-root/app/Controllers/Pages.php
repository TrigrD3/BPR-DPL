<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Index | Credit Scoring',
            'css' => 'index',
            'font' => 'font',
            'navbar' => 'navbar',
        ];
        echo view('pages/index', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login Page | Credit Scoring',
            'css' => 'login',
            'font' => 'font',
            'navbar' => 'navbar',
        ];
        echo view('pages/login', $data);
    }

    public function FormAkun()
    {
        $data = [
            'title' => 'FormAkun Page | Credit Scoring',
            'css' => 'FormAkun',
            'font' => 'font',
            'navbar' => 'navbar',
        ];
        echo view('pages/FormAkun', $data);
    }

    public function hasil()
    {
        $data = [
            'title' => 'Hasil Page | Credit Scoring',
            'css' => 'hasil',
            'font' => 'font',
            'navbar' => 'navbar',
        ];
        echo view('pages/hasil', $data);
    }

    public function inputData5C()
    {
        $data = [
            'title' => 'Input Data 5C | Credit Scoring',
            'css' => 'inputData5C',
            'font' => 'font',
            'navbar' => 'navbar',
        ];
        echo view('pages/inputData5C', $data);
    }

    public function UbahBobotSkorCharacter()
    {
        $data = [
            'title' => 'Ubah Bobot Skor Character | Credit Scoring',
            'css' => 'UbahBobotSkorCharacter',
            'font' => 'font',
            'navbar' => 'navbar',
        ];
        echo view('pages/UbahBobotSkorCharacter', $data);
    }
}
