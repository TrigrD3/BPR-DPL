<?php

namespace App\Models;

use CodeIgniter\Model;

class PATModel extends Model
{
    function get_all_produk()
    {
        $data['PATProduk'] = $this->db->table('pat_produk')->select('*')->get()->getResult();
        return $data['PATProduk'];
    }
    
    function get_all_iklan()
    {
        $data['PATIklan'] = $this->db->table('pat_iklan')->select('*')->get()->getResult();
        return $data['PATIklan'];
    }
}
