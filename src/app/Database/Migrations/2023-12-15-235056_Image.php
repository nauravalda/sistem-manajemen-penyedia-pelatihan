<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Image extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE
            ],
            'course_id' => [
                'type' => 'INT'
            ],
            'url_img' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->addForeignKey('course_id', 'course', 'id');
        $this->forge->createTable('image');
    }

    public function down()
    {
        $this->forge->dropTable('image');
    }
}
