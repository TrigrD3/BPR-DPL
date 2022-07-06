<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Index | BANK LESTARI',
            'css' => 'index',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/index', $data);
    }

    public function SimulasiKredit()
    {
        $data = [
            'title' => 'SimulasiKredit | BANK LESTARI',
            'css' => 'SimulasiKredit',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/SimulasiKredit', $data);
    }

    public function SimulasiTabungan()
    {
        $data = [
            'title' => 'SimulasiTabungan | BANK LESTARI',
            'css' => 'SimulasiTabungan',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/SimulasiTabungan', $data);
    }

    public function Kredit()
    {
        $data = [
            'title' => 'Deposito | BANK LESTARI',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/Deposito', $data);
    }

    public function Deposito()
    {
        $data = [
            'title' => 'Deposito | BANK LESTARI',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/Deposito', $data);
    }

    public function ProdukDeposito()
    {
        $data = [
            'title' => 'ProdukDeposito | BANK LESTARI',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/ProdukDeposito', $data);
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
        echo view('pages/KAP', $data);
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
        echo view('pages/Publikasi', $data);
    }

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
        echo view('pages/Loker', $data);
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
        echo view('pages/Penghargaan', $data);
    }
}
