<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $this->db->table('users')->insert([
            'name'  => 'Felipe Pinheiro',
            'email' => 'felipe@email.com',
        ]);

        $this->db->table('users')->insert([
            'name'  => 'Miguel Pinheiro',
            'email' => 'miguel@email.com',
        ]);
    }
}
