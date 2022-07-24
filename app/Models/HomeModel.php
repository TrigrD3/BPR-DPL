<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = "";
    protected $useTimestamps = false;

    public function __construct()
    {
        // parent::__construct();
        $this->session = \Config\Services::session();
        $this->db = \Config\Database::connect();
        // $this->load->model('IdentitasWebsiteModel');
        // if (!$this->session->get('username')) {
        //     $this->session->setFlashdata('message', '<div class="alert alert-success" role="alert">Silahkan Login terlebih dahulu!</div>');
        //     return redirect()->to(base_url('Login'));
        // }
    }

    function get_all_berita()
    {
        $data['HomeBerita'] = $this->db->table('home_berita')->select('*')->get()->getResult();
        return $data['HomeBerita'];
    }

    public function get_id_berita($id)
    {
        $data = $this->db->table('home_berita')->select('*')->where('id_berita', $id)->get()->getRow();
        return $data;
    }

    public function add_berita($data)
    {
        if (!$this->validate([
            'foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'editor1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('home_berita')->insert($data);
    }

    public function update_berita($id, $data)
    {
        if (!$this->validate([
            'foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'editor1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('home_berita')->select('*')->where('id_berita', $id)->update($data);
        session()->setFlashdata('message', 'Edit Berita Berhasil');
    }

    public function delete_berita($id)
    {
        $this->db->table('home_berita')->select('*')->where('id_berita', $id)->delete();
    }

    function get_all_iklan()
    {
        $data['HomeIklan'] = $this->db->table('home_iklan')->select('*')->get()->getResult();
        return $data['HomeIklan'];
    }

    function get_all_deskripsi_website()
    {
        $data['HomeDeskripsiWebsite'] = $this->db->table('home_deskripsi_website')->select('*')->get()->getResult();
        return $data['HomeDeskripsiWebsite'];
    }
}
