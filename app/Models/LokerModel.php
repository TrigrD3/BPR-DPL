<?php

namespace App\Models;

use CodeIgniter\Model;

class LokerModel extends Model
{
    function get_all_produk()
    {
        $data['LokerProduk'] = $this->db->table('loker_produk')->select('*')->get()->getResult();
        return $data['LokerProduk'];
    }
    
    function get_all_iklan()
    {
        $data['LokerIklan'] = $this->db->table('loker_iklan')->select('*')->get()->getResult();
        return $data['LokerIklan'];
    }
}
