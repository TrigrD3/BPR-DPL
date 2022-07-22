<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    function get_all_berita()
    {
        $data['HomeBerita'] = $this->db->table('home_berita')->select('*')->get()->getResult();
        return $data['HomeBerita'];
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
