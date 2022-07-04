<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('layout/navbar');
        echo view('layout/footer');
    }
    public function deposito()
    {
        echo view('layout/header');
        echo view('layout/navbar');
        echo view('deposito');
        echo view('layout/footer');
    }
    public function produkdeposito()
    {
        echo view('layout/header');
        echo view('layout/navbar');
        echo view('produkdeposito');
        echo view('layout/footer');
    }
    public function tabungan()
    {
        echo view('layout/header');
        echo view('layout/navbar');
        echo view('tabungan');
        echo view('layout/footer');
    }
    public function produktabungan()
    {
        echo view('layout/header');
        echo view('layout/navbar');
        echo view('produktabungan');
        echo view('layout/footer');
    }
    public function KAP()
    {
        echo view('layout/header');
        echo view('layout/navbar');
        echo view('laporanKAP');
        echo view('layout/footer');
    }
    public function penghargaan()
    {
        echo view('layout/header');
        echo view('layout/navbar');
        echo view('penghargaan');
        echo view('layout/footer');
    }
}
