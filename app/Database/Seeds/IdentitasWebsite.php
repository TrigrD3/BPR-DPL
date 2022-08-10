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
                'whatsapp' => 'https://wa.me/+628115028311?text=Permisi',
                'facebook'  => 'https://Facebook.com/LQx0EwxWRkM9jZE6mGdJeX',
                'instagram' => 'https://Instagram.com/',
                'logo' => 'logo.jpg',
                'whistleblowing' => 'https://forms.gle/KRCnPSxefXSdBxGM8',
                'pengaduan' => 'https://forms.gle/5pqEJMh2FCB9cn5y9'
            ]
        ];

        foreach ($all_data as $data) {
            // insert semua data ke tabel
            $this->db->table('identitas_website')->insert($data);
        }
    }
}
