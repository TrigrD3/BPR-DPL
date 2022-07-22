<?php

namespace App\Models;

use CodeIgniter\Model;

class PublikasiModel extends Model
{
    function get_all_produk()
    {
        $data['PublikasiProduk'] = $this->db->table('publikasi_produk')->select('*')->get()->getResult();
        return $data['PublikasiProduk'];
    }
    
    function get_all_iklan()
    {
        $data['PublikasiIklan'] = $this->db->table('publikasi_iklan')->select('*')->get()->getResult();
        return $data['PublikasiIklan'];
    }
}
