<?php

namespace App\Models;

use CodeIgniter\Model;

class KreditModel extends Model
{
    function get_all_produk()
    {
        $data['KreditProduk'] = $this->db->table('kredit_produk')->select('*')->get()->getResult();
        return $data['KreditProduk'];
    }
    
    function get_all_iklan()
    {
        $data['KreditIklan'] = $this->db->table('kredit_iklan')->select('*')->get()->getResult();
        return $data['KreditIklan'];
    }
}
