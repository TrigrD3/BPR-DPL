<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    function get_all_produk()
    {
        $data['UserProduk'] = $this->db->table('user_produk')->select('*')->get()->getResult();
        return $data['UserProduk'];
    }
    
    function get_all_iklan()
    {
        $data['UserIklan'] = $this->db->table('user_iklan')->select('*')->get()->getResult();
        return $data['UserIklan'];
    }
}
