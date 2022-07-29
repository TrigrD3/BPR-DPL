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

    public function get_id_pembayaran($id)
    {
        $data = $this->db->table('layanan_pembayaran')->select('*')->where('id_pembayaran', $id)->get()->getRow();
        return $data;
    }

    public function add_pembayaran($data)
    {
        if (!$this->validate([

            'editor1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('layanan_pembayaran')->insert($data);
    }

    public function update_pembayaran($id, $data)
    {
        if (!$this->validate([
            'editor1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->db->table('layanan_pembayaran')->select('*')->where('id_pembayaran', $id)->update($data);
        session()->setFlashdata('message', 'Edit Deskripsi Berhasil');
    }
    public function delete_pembayaran($id)
    {
        $this->db->table('layanan_pembayaran')->select('*')->where('id_pembayaran', $id)->delete();
    }
























    function get_all_produk()
    {
        $data['LayananLainProduk'] = $this->db->table('layanan_produk')->select('*')->get()->getResult();
        return $data['LayananLainProduk'];
    }
    public function get_id_produk($id)
    {
        $data = $this->db->table('layanan_produk')->select('*')->where('id_produk', $id)->get()->getRow();
        return $data;
    }

    public function add_produk($data)
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

        $this->db->table('layanan_produk')->insert($data);
    }
    public function update_produk($id, $data)
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

        $this->db->table('layanan_produk')->select('*')->where('id_produk', $id)->update($data);
        session()->setFlashdata('message', 'Edit foto layanan Berhasil');
    }
    public function delete_produk($id)
    {
        $this->db->table('layanan_produk')->select('*')->where('id_produk', $id)->delete();
    }
}
