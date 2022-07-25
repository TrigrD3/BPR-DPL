<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Home extends Seeder
{
    public function run()
    {
        $this->berita();
        $this->iklan();
        $this->deskripsi_website();
    }

    public function berita()
    {
        $all_data = [
            [
                'foto'  => 'berita.jpg',
                'judul'  => 'berita.jpg',
                'tanggal'  => '12 Juli 2022',
                'isi_berita' => 'Pemerataan pembangunan dalam beberapa tahun',
                'slug' => 'berita-bank',
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('home_berita')->insert($data);
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
            $this->db->table('home_iklan')->insert($data);
        }
    }

    public function deskripsi_website()
    {
        $all_data = [
            [
                'deskripsi'  => 'Deskripsi ini saja',
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('home_deskripsi_website')->insert($data);
        }
    }
}
