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

    function get_rand_berita()
    {
        $data['RandomBerita'] = $this->db->table('home_berita')->select('*')->limit(3, 0)->orderBy("RAND ()")->get()->getResult();
        return $data['RandomBerita'];
    }

    function get_news_berita()
    {
        $data['RandomBerita'] = $this->db->table('home_berita')->select('*')->limit(4, 0)->where('DATE(`tanggal`) >=', 'DATE(NOW())', false)->orderBy('tanggal', 'asc')->get()->getResult();
        return $data['RandomBerita'];
    }

    function get_newes_berita()
    {
        $data['RandomBerita'] = $this->db->table('home_berita')->select('*')->limit(1, 0)->where('DATE(`tanggal`) >=', 'DATE(NOW())', false)->orderBy('tanggal', 'asc')->get()->getResult();
        return $data['RandomBerita'];
    }

    public function add_berita($data)
    {
        if (!$this->validate([
            'foto' => [
                'rules' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
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
                'rules' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
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

    public function get_id_iklan($id)
    {
        $data = $this->db->table('home_iklan')->select('*')->where('id_iklan', $id)->get()->getRow();
        return $data;
    }

    public function add_iklan($data)
    {
        if (!$this->validate([
            'foto' => [
                'rules' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('home_iklan')->insert($data);
    }

    public function update_iklan($id, $data)
    {
        if (!$this->validate([
            'foto' => [
                'rules' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('home_iklan')->select('*')->where('id_iklan', $id)->update($data);
        session()->setFlashdata('message', 'Edit Iklan Berhasil');
    }

    public function delete_iklan($id)
    {
        $this->db->table('home_iklan')->select('*')->where('id_iklan', $id)->delete();
    }

    function get_all_deskripsi_website()
    {
        $data['HomeDeskripsiWebsite'] = $this->db->table('home_deskripsi_website')->select('*')->get()->getResult();
        return $data['HomeDeskripsiWebsite'];
    }

    public function get_id_deskripsi_website($id)
    {
        $data = $this->db->table('home_deskripsi_website')->select('*')->where('id_deskripsi_website', $id)->get()->getRow();
        return $data;
    }

    public function update_deskripsi_website($id, $data)
    {
        if (!$this->validate([
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

        $this->db->table('home_deskripsi_website')->select('*')->where('id_deskripsi_website', $id)->update($data);
        session()->setFlashdata('message', 'Edit Deskripsi Website Berhasil');
    }
}
