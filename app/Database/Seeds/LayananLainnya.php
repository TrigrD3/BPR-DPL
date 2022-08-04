<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LayananLainnya extends Seeder
{
    public function run()
    {
        $this->pembayaran();
        $this->produk();
        $this->iklan();
    }

    public function pembayaran()
    {
        $all_data = [
            [
                'deskripsi' => 'Pemerataan pembayaran dalam beberapa tahun',
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('layanan_pembayaran')->insert($data);
        }
    }

    public function produk()
    {
        $all_data = [
            [
                'foto'  => 'produk.jpg',
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('layanan_produk')->insert($data);
        }
    }
    public function iklan()
    {
        $all_data = [
            [
                'foto'  => 'iklan.jpg',
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('layananlain_iklan')->insert($data);
        }
    }
}
