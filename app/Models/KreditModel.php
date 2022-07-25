<?php

namespace App\Models;

use CodeIgniter\Model;

class KreditModel extends Model
{
    protected $table = "";
    protected $useTimestamps = false;

    function get_all_produk()
    {
        $data['KreditProduk'] = $this->db->table('kredit_produk')->select('*')->get()->getResult();
        return $data['KreditProduk'];
    }

    public function get_id_kredit($id)
    {
        $data = $this->db->table('kredit_produk')->select('*')->where('id_produk', $id)->get()->getRow();
        return $data;
    }

    public function add_kredit($data)
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'editor1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('kredit_produk')->insert($data);
    }

    public function add_iklankredit($data)
    {
        if (!$this->validate([
            'foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('kredit_iklan')->insert($data);
    }

    public function update_kredit($id, $data)
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'editor1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('kredit_produk')->select('*')->where('id_produk', $id)->update($data);
        session()->setFlashdata('message', 'Edit kredit Berhasil');
    }

    public function update_iklankredit($id, $data)
    {
        if (!$this->validate([

            'foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('kredit_iklan')->select('*')->where('id_iklan', $id)->update($data);
        session()->setFlashdata('message', 'Edit Iklan kredit Berhasil');
    }

    public function delete_kredit($id)
    {
        $this->db->table('kredit_produk')->select('*')->where('id_produk', $id)->delete();
    }
    public function delete_iklankredit($id)
    {
        $this->db->table('kredit_iklan')->select('*')->where('id_iklan', $id)->delete();
    }
    function get_all_iklan()
    {
        $data['KreditIklan'] = $this->db->table('kredit_iklan')->select('*')->get()->getResult();
        return $data['KreditIklan'];
    }
    public function get_id_iklan($id)
    {
        $data = $this->db->table('kredit_iklan')->select('*')->where('id_iklan', $id)->get()->getRow();
        return $data;
    }
}
