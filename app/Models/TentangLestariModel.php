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

    function get_all_sejarah()
    {
        $data['TentangLestariSejarah'] = $this->db->table('tentang_sejarah')->select('*')->get()->getResult();
        return $data['TentangLestariSejarah'];
    }

    function get_all_alamat()
    {
        $data['TentangLestariAlamat'] = $this->db->table('tentang_alamat_kantor')->select('*')->get()->getResult();
        return $data['TentangLestariAlamat'];
    }
    function get_all_visimisi()
    {
        $data['TentangLestariVisiMisi'] = $this->db->table('tentang_visi_misi')->select('*')->get()->getResult();
        return $data['TentangLestariVisiMisi'];
    }
    function get_all_struktur_organisasi()
    {
        $data['TentangLestariStrukturOrganisasi'] = $this->db->table('tentang_struktur_organisasi')->select('*')->get()->getResult();
        return $data['TentangLestariStrukturOrganisasi'];
    }
}
