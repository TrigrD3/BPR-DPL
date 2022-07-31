<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Tabungan extends Seeder
{
    public function run()
    {
        $this->produk();
        $this->iklan();
        $this->form();
    }

    public function produk()
    {
        $all_data = [
            [
                'nama'  => 'produk',
                'deskripsi' => 'Pemerataan produk dalam beberapa tahun',
                'foto'  => 'produk.jpg',
                'slug' => 'produk-tabungan',
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('tabungan_produk')->insert($data);
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
            $this->db->table('tabungan_iklan')->insert($data);
        }
    }
    public function form()
    {
        $all_data = [
            [
                'g_form'  => 'https://forms.gle/V7PLodHwzT35Fdnp9',
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('tabungan_form')->insert($data);
        }
    }
}
