<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kredit extends Seeder
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
                'foto_depan' => 'produk_depan.jpg',
                'slug' => 'produk-kredit',
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('kredit_produk')->insert($data);
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
            $this->db->table('kredit_iklan')->insert($data);
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
            $this->db->table('kredit_form')->insert($data);
        }
    }
}
