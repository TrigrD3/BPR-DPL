<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AllData extends Seeder
{
    public function run()
    {
        //
        $this->call('User');
        $this->call('IdentitasWebsite');
        $this->call('Home');
        $this->call('Kredit');
        $this->call('Deposito');
        $this->call('Tabungan');
        $this->call('LayananLainnya');
        $this->call('TentangLestari');
        $this->call('Header');
    }
}
