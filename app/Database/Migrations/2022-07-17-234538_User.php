<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        //Tabel User
        $this->forge->addField([
            'id_user'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'username'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'level'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            // 'slug VARCHAR(100) UNIQUE',
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'update_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        // Membuat primary key
        $this->forge->addKey('id_user', TRUE);

        // Membuat tabel user
        $this->forge->createTable('user', TRUE);
    }

    public function down()
    {
        //Menghapus table user
        $this->forge->dropTable('user');
    }
}
