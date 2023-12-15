<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'course_id' => 1,
                'datetime' => '2023-12-22 10:00:00',
            ],
            [
                'course_id' => 2,
                'datetime' => '2023-12-29 10:00:00',
            ],
            [
                'course_id' => 3,
                'datetime' => '2024-01-20 19:00:00',
            ],
            [
                'course_id' => 4,
                'datetime' => '2024-01-27 19:00:00',
            ],
            [
                'course_id' => 5,
                'datetime' => '2024-02-03 19:00:00',
            ],
        ];

        // Memasukkan data ke dalam tabel 'schedule'
        $this->db->table('schedule')->insertBatch($data);
    }
}
