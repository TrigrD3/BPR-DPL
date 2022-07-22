<?php

namespace App\Models;

use CodeIgniter\Model;

class DepositoModel extends Model
{
    function get_all_produk()
    {
        $data['DepositoProduk'] = $this->db->table('deposito_produk')->select('*')->get()->getResult();
        return $data['DepositoProduk'];
    }

    function get_all_iklan()
    {
        $data['DepositoIklan'] = $this->db->table('deposito_iklan')->select('*')->get()->getResult();
        return $data['DepositoIklan'];
    }
}
