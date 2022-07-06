<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
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
            'title' => 'SimulasiKredit',
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
            'title' => 'SimulasiTabungan',
            'css' => 'SimulasiTabungan',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/SimulasiTabungan', $data);
    }

    public function Deposito()
    {
        $data = [
            'title' => 'Deposito',
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
            'title' => 'ProdukDeposito',
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
            'title' => 'KAP',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/KAP', $data);
    }

    public function Penghargaan()
    {
        $data = [
            'title' => 'Penghargaan',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/Penghargaan', $data);
    }

    public function Tabungan()
    {
        $data = [
            'title' => 'Tabungan',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/Tabungan', $data);
    }

    public function ProdukTabungan()
    {
        $data = [
            'title' => 'Produk Tabungan',
            'css' => 'Style',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/ProdukTabungan', $data);
    }

    public function Lelang()
    {
        $data = [
            'title' => 'Lelang',
            'css' => 'Lelang',
            'font' => 'font',
            'navbar' => 'navbar',
            'footer' => 'footer',
            'header' => 'header'
        ];
        echo view('pages/Lelang', $data);
    }
}
