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
        if (!$this->validate([
            'whatsapp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'facebook' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'instagram' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'logo' => [
                'rules' => 'uploaded[logo]|mime_in[logo,image/jpg,image/jpeg,image/gif,image/png]|max_size[logo,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        return $this->db->table('identitas_website')->where('id_identitas', $data['id_identitas'])->update($data);
    }

    function detail($id_identitas)
    {
        return $data['IdentitasWebsite'] = $this->db->table('identitas_website')->select('*')->where('id_identitas', $id_identitas)->get()->getRow();
    }
}
