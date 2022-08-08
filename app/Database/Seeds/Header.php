<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Header extends Seeder
{
    public function run()
    {
        $this->publikasi();
        $this->pat();
        $this->loker();
        $this->penghargaan();
        $this->lelang();
    }

    public function publikasi()
    {
        $all_data = [
            [
                'nama'  => 'publikasi',
                'file' => 'Laporan Publikasi tahun 2012.pdf',
                'tahun' => '2012',
                'triwulan' => 1
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('header_publikasi')->insert($data);
        }
    }

    public function pat()
    {
        $all_data = [
            [
                'nama'  => 'pat',
                'file'  => 'Laporan pat tahun 2012.pdf',
                'tahun' => '2012'
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('header_pat')->insert($data);
        }
    }

    public function loker()
    {
        $all_data = [
            [
                'foto'  => 'loker.jpg',
                'judul'  => 'Loker',
                'deskripsi' => 'dibuka lowongan kerja',
                'link' => 'https://forms.gle/H6CZQ2Zxen1ZfXaHA'
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('header_loker')->insert($data);
        }
    }

    public function penghargaan()
    {
        $all_data = [
            [
                'foto'  => 'penghargaan.jpg',
                'deskripsi'  => 'Perkembangan Penghargaan'
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('header_penghargaan')->insert($data);
        }
    }

    public function lelang()
    {
        $all_data = [
            [
                'foto'  => 'lelang.jpg',
                'google_maps'  => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15932.158688486461!2d114.58365774999999!3d-3.3403665499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423ada2d7e145%3A0xfa7934e04cd5311a!2sBANK%20BPR%20DANA%20PERMATA%20LESTARI!5e0!3m2!1sid!2sid!4v1657687751917!5m2!1sid!2sid',
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('header_lelang')->insert($data);
        }
    }
}
