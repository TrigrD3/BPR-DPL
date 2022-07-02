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
            'footer' => 'footer',
        ];
        echo view('pages/index', $data);
    }

}
