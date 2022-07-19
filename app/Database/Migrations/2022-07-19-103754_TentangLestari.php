<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TentangLestari extends Migration
{
    public function up()
    {
        $this->profil();
        $this->sejarah();
        $this->alamat_kantor();
        $this->visi_misi();
        $this->struktur_organisasi();
    }

    public function down()
    {
        $this->forge->dropTable('tentang_profil');
        $this->forge->dropTable('tentang_sejarah');
        $this->forge->dropTable('tentang_alamat_kantor');
        $this->forge->dropTable('tentang_visi_misi');
        $this->forge->dropTable('tentang_struktur_organisasi');
    }

    public function profil()
    {
        $this->forge->addField([
            'id_profil'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'judul'              => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'deskripsi'            => [
                'type'           => 'MEDIUMTEXT'
            ]
        ]);

        $this->forge->addKey('id_profil', TRUE);

        $this->forge->createTable('tentang_profil', TRUE);
    }

    public function sejarah()
    {
        $this->forge->addField([
            'id_sejarah'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'judul'              => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'tanggal'              => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'deskripsi'            => [
                'type'           => 'MEDIUMTEXT'
            ]
        ]);

        $this->forge->addKey('id_sejarah', TRUE);

        $this->forge->createTable('tentang_sejarah', TRUE);
    }

    public function alamat_kantor()
    {
        $this->forge->addField([
            'id_alamat_kantor'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'kabupaten_kota'              => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'alamat'              => [
                'type'           => 'TEXT'
            ],
            'nomor_telepon'              => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'google_maps'            => [
                'type'           => 'TEXT'
            ],
            'foto'            => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ]
        ]);

        $this->forge->addKey('id_alamat_kantor', TRUE);

        $this->forge->createTable('tentang_alamat_kantor', TRUE);
    }

    public function visi_misi()
    {
        $this->forge->addField([
            'id_visi_misi'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'visi'              => [
                'type'           => 'MEDIUMTEXT'
            ],
            'misi'              => [
                'type'           => 'MEDIUMTEXT'
            ]
        ]);

        $this->forge->addKey('id_visi_misi', TRUE);

        $this->forge->createTable('tentang_visi_misi', TRUE);
    }

    public function struktur_organisasi()
    {
        $this->forge->addField([
            'id_struktur_organisasi'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'foto'              => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ]
        ]);

        $this->forge->addKey('id_struktur_organisasi', TRUE);

        $this->forge->createTable('tentang_struktur_organisasi', TRUE);
    }
}
