<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'email' => 'john.doe@example.com',
                'name' => 'John Doe Training Solutions',
                'phone_number' => '123-456-789',
                'password' => 'password123',
            ],
            [
                'id' => 2,
                'email' => 'sara.smith@example.com',
                'name' => 'Smith & Co Training',
                'phone_number' => '987-654-321',
                'password' => 'securepass456',
            ],
            [
                'id' => 3,
                'email' => 'info@biglearninghub.com',
                'name' => 'Big Learning Hub',
                'phone_number' => '555-555-555',
                'password' => 'bigpassword',
            ],
            [
                'id' => 4,
                'email' => 'contact@knowledgebuilders.org',
                'name' => 'Knowledge Builders',
                'phone_number' => '111-222-333',
                'password' => 'kbpass789',
            ],
            [
                'id' => 5,
                'email' => 'elizabeth@skillmasters.edu',
                'name' => 'Skill Masters Institute',
                'phone_number' => '444-555-666',
                'password' => 'skills123',
            ],
            [
                'id' => 6,
                'email' => 'contact@innovativetrainers.net',
                'name' => 'Innovative Trainers Inc.',
                'phone_number' => '777-888-999',
                'password' => 'innovate456',
            ],
            [
                'id' => 7,
                'email' => 'support@learningadvantage.com',
                'name' => 'Learning Advantage LLC',
                'phone_number' => '333-222-111',
                'password' => 'advantagepass',
            ],
        ];

        // Memasukkan data ke dalam tabel 'user'
        $this->db->table('user')->insertBatch($data);
    }
}
