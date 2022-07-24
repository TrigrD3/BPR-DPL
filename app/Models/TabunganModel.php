<?php

namespace App\Models;

use CodeIgniter\Model;

class TabunganModel extends Model
{
    function get_all_produk()
    {
        $data['TabunganProduk'] = $this->db->table('tabungan_produk')->select('*')->get()->getResult();
        return $data['TabunganProduk'];
    }

    function get_all_iklan()
    {
        $data['TabunganIklan'] = $this->db->table('tabungan_iklan')->select('*')->get()->getResult();
        return $data['TabunganIklan'];
    }
}
