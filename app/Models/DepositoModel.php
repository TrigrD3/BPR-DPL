<?php

namespace App\Models;

use CodeIgniter\Model;

class DepositoModel extends Model
{
    protected $table = "";
    protected $useTimestamps = false;

    function get_all_produk()
    {
        $data['depositoProduk'] = $this->db->table('deposito_produk')->select('*')->get()->getResult();
        return $data['depositoProduk'];
    }

    public function get_id_deposito($id)
    {
        $data = $this->db->table('deposito_produk')->select('*')->where('id_produk', $id)->get()->getRow();
        return $data;
    }

    public function add_deposito($data)
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

        $this->db->table('deposito_produk')->insert($data);
    }

    public function add_iklandeposito($data)
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

        $this->db->table('deposito_iklan')->insert($data);
    }

    public function update_deposito($id, $data)
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

        $this->db->table('deposito_produk')->select('*')->where('id_produk', $id)->update($data);
        session()->setFlashdata('message', 'Edit deposito Berhasil');
    }

    public function update_iklandeposito($id, $data)
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

        $this->db->table('deposito_iklan')->select('*')->where('id_iklan', $id)->update($data);
        session()->setFlashdata('message', 'Edit Iklan deposito Berhasil');
    }

    public function delete_deposito($id)
    {
        $this->db->table('deposito_produk')->select('*')->where('id_produk', $id)->delete();
    }
    public function delete_iklandeposito($id)
    {
        $this->db->table('deposito_iklan')->select('*')->where('id_iklan', $id)->delete();
    }
    function get_all_iklan()
    {
        $data['depositoIklan'] = $this->db->table('deposito_iklan')->select('*')->get()->getResult();
        return $data['depositoIklan'];
    }
    public function get_id_iklan($id)
    {
        $data = $this->db->table('deposito_iklan')->select('*')->where('id_iklan', $id)->get()->getRow();
        return $data;
    }
}
