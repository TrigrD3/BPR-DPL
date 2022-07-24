<?php

namespace App\Models;

use CodeIgniter\Model;

class LelangModel extends Model
{
    function get_all_produk()
    {
        $data['LelangProduk'] = $this->db->table('lelang_produk')->select('*')->get()->getResult();
        return $data['LelangProduk'];
    }
    
    function get_all_iklan()
    {
        $data['LelangIklan'] = $this->db->table('lelang_iklan')->select('*')->get()->getResult();
        return $data['LelangIklan'];
    }
}
