<?php

namespace App\Models;

use CodeIgniter\Model;

class AkunModel extends Model
{
    function get_all_akun()
    {
        $data['Akun'] = $this->db->table('user')->select('*')->get()->getResult();
        return $data['Akun'];
    }
}
