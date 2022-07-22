<?php

namespace App\Models;

use CodeIgniter\Model;

class PenghargaanModel extends Model
{
    function get_all_produk()
    {
        $data['PenghargaanProduk'] = $this->db->table('penghargaan_produk')->select('*')->get()->getResult();
        return $data['PenghargaanProduk'];
    }
    
    function get_all_iklan()
    {
        $data['PenghargaanIklan'] = $this->db->table('penghargaan_iklan')->select('*')->get()->getResult();
        return $data['PenghargaanIklan'];
    }
}
