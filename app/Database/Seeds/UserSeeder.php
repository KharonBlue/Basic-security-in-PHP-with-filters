<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $password = password_hash("123456", PASSWORD_DEFAULT);

        $data = [
            'name' => 'kharon',
            'email'    => 'test@email.com',
            'password' => $password,
            'role' => 'ADMIN',
            'softDelete' => 1
        ];

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
