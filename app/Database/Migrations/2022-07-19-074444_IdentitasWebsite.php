<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IdentitasWebsite extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_identitas'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'whatsapp'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'facebook'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'instagram'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'logo'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ]
            // 'slug VARCHAR(100) UNIQUE',
            // 'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            // 'update_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        // Membuat primary key
        $this->forge->addKey('id_identitas', TRUE);

        // Membuat tabel identitas
        $this->forge->createTable('identitas_website', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('identitas_website');
    }
}
