<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TentangLestari extends Seeder
{
    public function run()
    {
        $this->profil();
        $this->sejarah();
        $this->alamat_kantor();
        $this->visi_misi();
        $this->struktur_organisasi();
    }

    public function profil()
    {
        $all_data = [
            [
                'judul'  => 'profil',
                'deskripsi' => 'Pemerataan profil dalam beberapa tahun'
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('tentang_profil')->insert($data);
        }
    }

    public function sejarah()
    {
        $all_data = [
            [
                'judul'  => 'sejarah',
                'tanggal'  => '17 Agustus 1945',
                'deskripsi' => 'Pemerataan sejarah 1945 dalam beberapa tahun'
            ],
            [
                'judul'  => 'sejarah indo',
                'tanggal'  => '17 Agustus 1955',
                'deskripsi' => 'Pemerataan sejarah 1955 dalam beberapa tahun'
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('tentang_sejarah')->insert($data);
        }
    }

    public function alamat_kantor()
    {
        $all_data = [
            [
                'kabupaten_kota'  => 'Banjarmasin',
                'alamat'  => 'JL. Banjarmasin',
                'nomor_telepon' => '0897654321',
                'google_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15932.158688486461!2d114.58365774999999!3d-3.3403665499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423ada2d7e145%3A0xfa7934e04cd5311a!2sBANK%20BPR%20DANA%20PERMATA%20LESTARI!5e0!3m2!1sid!2sid!4v1657687751917!5m2!1sid!2sid',
                'foto' => 'alamat.jpg',
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('tentang_alamat_kantor')->insert($data);
        }
    }

    public function visi_misi()
    {
        $all_data = [
            [
                'visi'  => 'MENJADI BPR YANG KOKOH DAN KOMITMEN TERHADAP USAHA MIKRO',
                'misi'  => 'Meningkatkan kinerja dan tetap sebagai BPR yang sehat, profesional dan mampu bersaing serta berkesinambungan. Memberikan pelayanan yang terbaik kepada nasabah, berperan dalam pengembangan usaha Mikro, serta meningkatkan nilai tambah investasi pemegang saham dan kesejahteraan karyawan.'
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('tentang_visi_misi')->insert($data);
        }
    }

    public function struktur_organisasi()
    {
        $all_data = [
            [
                'foto'  => 'struktur.jpg',
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('tentang_struktur_organisasi')->insert($data);
        }
    }
}
