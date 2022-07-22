<?php

namespace App\Models;

use CodeIgniter\Model;

class TentangLestariModel extends Model
{
    function get_all_profil()
    {
        $data['TentangLestariProfil'] = $this->db->table('tentang_profil')->select('*')->get()->getResult();
        return $data['TentangLestariProfil'];
    }

    function get_all_iklan()
    {
        $data['KreditIklan'] = $this->db->table('kredit_iklan')->select('*')->get()->getResult();
        return $data['KreditIklan'];
    }
}
