<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LayananLainnya extends Migration
{
    public function up()
    {
        $this->pembayaran();
        $this->produk();
        $this->iklan();
    }

    public function down()
    {
        $this->forge->dropTable('layanan_pembayaran');
        $this->forge->dropTable('layanan_produk');
        $this->forge->dropTable('layananlain_iklan');
    }

    public function pembayaran()
    {
        $this->forge->addField([
            'id_pembayaran'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'deskripsi'            => [
                'type'           => 'MEDIUMTEXT'
            ],
            'slug VARCHAR(100) UNIQUE',
        ]);

        $this->forge->addKey('id_pembayaran', TRUE);

        $this->forge->createTable('layanan_pembayaran', TRUE);
    }

    public function produk()
    {
        $this->forge->addField([
            'id_produk'           => [
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

        $this->forge->addKey('id_produk', TRUE);

        $this->forge->createTable('layanan_produk', TRUE);
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

        $this->forge->createTable('layananlain_iklan', TRUE);
    }
}
