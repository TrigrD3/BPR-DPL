<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class IdentitasWebsite extends Seeder
{
    public function run()
    {
        //
        $all_data = [
            [
                'whatsapp' => 'https://chat.whatsapp.com/LQx0EwxWRkM9jZE6mGdJeX',
                'facebook'  => 'https://Facebook.com/LQx0EwxWRkM9jZE6mGdJeX',
                'instagram' => 'https://Instagram.com/',
                'logo' => 'logo.jpg',
                'whistleblowing' => 'https://Form.com/',
                'pengaduan' => 'https://Form.com/'
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('identitas_website')->insert($data);
        }
    }
}
