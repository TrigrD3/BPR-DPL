<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        // membuat data
        $user_data = [
            [
                'nama' => 'Admin',
                'username'  => 'admin',
                'password' => password_hash('admin', PASSWORD_BCRYPT),
                'level' => 'super_admin',
            ],
            [
                'nama' => 'Bank BPR',
                'username'  => 'adminbank',
                'password' => password_hash('adminbank', PASSWORD_BCRYPT),
                'level' => 'admin',
            ]
        ];

        foreach ($user_data as $data) {
            // insert semua data ke tabel
            $this->db->table('user')->insert($data);
        }
    }
}
