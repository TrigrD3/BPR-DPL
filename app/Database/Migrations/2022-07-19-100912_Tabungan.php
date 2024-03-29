<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tabungan extends Migration
{
    public function up()
    {
        $this->produk();
        $this->iklan();
        $this->form();
    }

    public function down()
    {
        $this->forge->dropTable('tabungan_produk');
        $this->forge->dropTable('tabungan_iklan');
        $this->forge->dropTable('tabungan_form');
    }

    public function produk()
    {
        $this->forge->addField([
            'id_produk'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'deskripsi'            => [
                'type'           => 'MEDIUMTEXT'
            ],
            'foto'            => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'foto_depan'            => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'slug VARCHAR(100) UNIQUE',
        ]);

        $this->forge->addKey('id_produk', TRUE);

        $this->forge->createTable('tabungan_produk', TRUE);
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

        $this->forge->createTable('tabungan_iklan', TRUE);
    }

    public function form()
    {
        $this->forge->addField([
            'id_form'           => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'g_form'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ]
        ]);

        $this->forge->addKey('id_form', TRUE);

        $this->forge->createTable('tabungan_form', TRUE);
    }
}
