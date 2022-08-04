<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Home extends Migration
{
    public function up()
    {
        $this->berita();
        $this->iklan();
        $this->deskripsi_website();
        $this->foto_kredit();
        $this->foto_deposito();
        $this->foto_tabungan();
    }

    public function down()
    {
        $this->forge->dropTable('home_berita');
        $this->forge->dropTable('home_iklan');
        $this->forge->dropTable('home_deskripsi_website');
        $this->forge->dropTable('foto_kredit');
        $this->forge->dropTable('foto_tabungan');
        $this->forge->dropTable('foto_deposito');
    }

    public function berita()
    {
        $this->forge->addField([
            'id_berita'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'foto'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'judul'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'tanggal'            => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'isi_berita'            => [
                'type'           => 'MEDIUMTEXT'
            ],
            'slug VARCHAR(100) UNIQUE',
        ]);

        $this->forge->addKey('id_berita', TRUE);

        $this->forge->createTable('home_berita', TRUE);
    }

    public function iklan()
    {
        $this->forge->addField([
            'id_iklan'           => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'foto'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ]
        ]);

        $this->forge->addKey('id_iklan', TRUE);

        $this->forge->createTable('home_iklan', TRUE);
    }

    public function deskripsi_website()
    {
        $this->forge->addField([
            'id_deskripsi_website'  => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'deskripsi'             => [
                'type'              => 'MEDIUMTEXT'
            ]
        ]);

        $this->forge->addKey('id_deskripsi_website', TRUE);

        $this->forge->createTable('home_deskripsi_website', TRUE);
    }
    public function foto_kredit()
    {
        $this->forge->addField([
            'id_foto'           => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'foto'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ]
        ]);

        $this->forge->addKey('id_foto', TRUE);

        $this->forge->createTable('foto_kredit', TRUE);
    }
    public function foto_tabungan()
    {
        $this->forge->addField([
            'id_foto'           => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'foto'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ]
        ]);

        $this->forge->addKey('id_foto', TRUE);

        $this->forge->createTable('foto_tabungan', TRUE);
    }
    public function foto_deposito()
    {
        $this->forge->addField([
            'id_foto'           => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'foto'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ]
        ]);
        $this->forge->addKey('id_foto', TRUE);
        $this->forge->createTable('foto_deposito', TRUE);
    }
}
