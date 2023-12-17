<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Schedule extends Migration
{
    public function up()
    {
        $this->db->query('SET foreign_key_checks = 0');

        $this->forge->addField([
            'course_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'datetime' => [
                'type' => 'DATETIME',
            ],
        ]);

        $this->forge->createTable('schedule');

        $this->db->query('SET foreign_key_checks = 1');
    }

    public function down()
    {
        
        $this->forge->dropTable('schedule');
    }
}