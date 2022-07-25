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

    public function get_id_user($id)
    {
        $data = $this->db->table('user')->select('*')->where('id_user', $id)->get()->getRow();
        return $data;
    }

    public function add_user($data)
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('user')->insert($data);
    }

    public function update_user($id, $data)
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('user')->select('*')->where('id_user', $id)->update($data);
        session()->setFlashdata('message', 'Edit User Berhasil');
    }

    public function delete_user($id)
    {
        $this->db->table('user')->select('*')->where('id_user', $id)->delete();
    }
}
