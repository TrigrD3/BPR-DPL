<?php

namespace App\Controllers;
// defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends BaseController
{
    // protected $table = 'identitas_website';
    private $db;

    public function __construct()
    {
        // parent::__construct();
        $this->session = \Config\Services::session();
        $this->db = \Config\Database::connect();
    }

    public function Admin()
    {
        $data = [
            'title' => 'Admin',
            'css' => 'Style',
            'font' => 'font',
        ];
        echo view('Admin/Admin', $data);
    }
}
