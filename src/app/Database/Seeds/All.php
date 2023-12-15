<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class All extends Seeder
{
    public function run()
    {
        $this->call('UserSeeder');
        $this->call('CourseSeeder');
        $this->call('ScheduleSeeder');
    }
}