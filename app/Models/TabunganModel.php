<?php

namespace App\Models;

use CodeIgniter\Model;

class TabunganModel extends Model
{
    protected $table = "";
    protected $useTimestamps = false;

    function get_all_produk()
    {
        $data['tabunganProduk'] = $this->db->table('tabungan_produk')->select('*')->get()->getResult();
        return $data['tabunganProduk'];
    }

    public function get_id_tabungan($id)
    {
        $data = $this->db->table('tabungan_produk')->select('*')->where('id_produk', $id)->get()->getRow();
        return $data;
    }

    public function add_tabungan($data)
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
            'foto_depan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('tabungan_produk')->insert($data);
    }

    public function add_iklantabungan($data)
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

        $this->db->table('tabungan_iklan')->insert($data);
    }

    public function update_tabungan($id, $data)
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
            'foto_depan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('tabungan_produk')->select('*')->where('id_produk', $id)->update($data);
        session()->setFlashdata('message', 'Edit tabungan Berhasil');
    }

    public function update_iklantabungan($id, $data)
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

        $this->db->table('tabungan_iklan')->select('*')->where('id_iklan', $id)->update($data);
        session()->setFlashdata('message', 'Edit Iklan tabungan Berhasil');
    }

    public function delete_tabungan($id)
    {
        $this->db->table('tabungan_produk')->select('*')->where('id_produk', $id)->delete();
    }
    public function delete_iklantabungan($id)
    {
        $this->db->table('tabungan_iklan')->select('*')->where('id_iklan', $id)->delete();
    }
    function get_all_iklan()
    {
        $data['tabunganIklan'] = $this->db->table('tabungan_iklan')->select('*')->get()->getResult();
        return $data['tabunganIklan'];
    }
    public function get_id_iklan($id)
    {
        $data = $this->db->table('tabungan_iklan')->select('*')->where('id_iklan', $id)->get()->getRow();
        return $data;
    }
    function get_all_form()
    {
        $data['TabunganForm'] = $this->db->table('tabungan_form')->select('*')->get()->getResult();
        return $data['TabunganForm'];
    }

    public function get_id_form($id)
    {
        $data = $this->db->table('tabungan_form')->select('*')->where('id_form', $id)->get()->getRow();
        return $data;
    }
    public function update_formtabungan($id, $data)
    {
        if (!$this->validate([

            'g_form' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('tabungan_form')->select('*')->where('id_form', $id)->update($data);
        session()->setFlashdata('message', 'Edit Form tabungan Berhasil');
    }
}
