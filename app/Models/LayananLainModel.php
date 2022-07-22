<?php

namespace App\Models;

use CodeIgniter\Model;

class LayananLainModel extends Model
{
    function get_all_pembayaran()
    {
        $data['LayananLainPembayaran'] = $this->db->table('layanan_pembayaran')->select('*')->get()->getResult();
        return $data['LayananLainPembayaran'];
    }

    function get_all_produk()
    {
        $data['LayananLainProduk'] = $this->db->table('layanan_produk')->select('*')->get()->getResult();
        return $data['LayananLainProduk'];
    }
}
