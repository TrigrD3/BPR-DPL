<?php

namespace App\Models;

use CodeIgniter\Model;

class HeaderModel extends Model
{
    function get_all_lelang()
    {
        $data['HeaderLelang'] = $this->db->table('header_lelang')->select('*')->get()->getResult();
        return $data['HeaderLelang'];
    }

    function get_all_loker()
    {
        $data['HeaderLoker'] = $this->db->table('header_loker')->select('*')->get()->getResult();
        return $data['HeaderLoker'];
    }

    function get_all_pat()
    {
        $data['HeaderPAT'] = $this->db->table('header_pat')->select('*')->get()->getResult();
        return $data['HeaderPAT'];
    }
    function get_all_penghargaan()
    {
        $data['HeaderPenghargaan'] = $this->db->table('header_penghargaan')->select('*')->get()->getResult();
        return $data['HeaderPenghargaan'];
    }
    function get_all_publikasi()
    {
        $data['HeaderPublikasi'] = $this->db->table('header_publikasi')->select('*')->get()->getResult();
        return $data['HeaderPublikasi'];
    }
}
