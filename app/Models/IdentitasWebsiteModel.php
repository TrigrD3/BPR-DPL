<?php

namespace App\Models;

use CodeIgniter\Model;

// defined('BASEPATH') or exit('No direct script access allowed');

class IdentitasWebsiteModel extends Model
{
    function get_all()
    {
        $data['IdentitasWebsite'] = $this->db->table('identitas_website')->select('*')->get()->getRow();
        return $data['IdentitasWebsite'];
    }

    function update_IdentitasWebsite($data)
    {
        return $this->db->table('identitas_website')->where('id_identitas', $data['id_identitas'])->update($data);
    }

    function detail($id_identitas)
    {
        return $data['IdentitasWebsite'] = $this->db->table('identitas_website')->select('*')->where('id_identitas', $id_identitas)->get()->getRow();
    }
}
