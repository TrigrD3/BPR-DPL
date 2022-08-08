<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Header extends Migration
{
    public function up()
    {
        $this->publikasi();
        $this->pat();
        $this->loker();
        $this->penghargaan();
        $this->lelang();
    }

    public function down()
    {
        $this->forge->dropTable('header_publikasi');
        $this->forge->dropTable('header_pat');
        $this->forge->dropTable('header_loker');
        $this->forge->dropTable('header_penghargaan');
        $this->forge->dropTable('header_lelang');
    }

    public function publikasi()
    {
        $this->forge->addField([
            'id_publikasi'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama'              => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'file'            => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'tahun'            => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'triwulan'            => [
                'type'           => 'INT',
                'constraint'     => 5,
            ]
        ]);

        $this->forge->addKey('id_publikasi', TRUE);

        $this->forge->createTable('header_publikasi', TRUE);
    }

    public function pat()
    {
        $this->forge->addField([
            'id_pat'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama'              => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'file'            => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'tahun'            => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ]
        ]);

        $this->forge->addKey('id_pat', TRUE);

        $this->forge->createTable('header_pat', TRUE);
    }

    public function loker()
    {
        $this->forge->addField([
            'id_loker'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'foto'              => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'judul'              => [
                'type'           => 'TEXT'
            ],
            'deskripsi'              => [
                'type'           => 'MEDIUMTEXT'
            ],
            'link'            => [
                'type'           => 'TEXT'
            ]
        ]);

        $this->forge->addKey('id_loker', TRUE);

        $this->forge->createTable('header_loker', TRUE);
    }

    public function penghargaan()
    {
        $this->forge->addField([
            'id_penghargaan'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'foto'              => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'deskripsi'              => [
                'type'           => 'MEDIUMTEXT'
            ]
        ]);

        $this->forge->addKey('id_penghargaan', TRUE);

        $this->forge->createTable('header_penghargaan', TRUE);
    }

    public function lelang()
    {
        $this->forge->addField([
            'id_lelang'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'foto'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'google_maps'        => [
                'type'           => 'TEXT'
            ]
        ]);

        $this->forge->addKey('id_lelang', TRUE);

        $this->forge->createTable('header_lelang', TRUE);
    }
}
