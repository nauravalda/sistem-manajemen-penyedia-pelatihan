<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Course extends Migration
{
    public function up()
    {
        $this->db->query('SET foreign_key_checks = 0');

        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'provider_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'name' => [
                'type' => 'TEXT',
            ],
            'url_img' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'what_you_will_learn' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'course_content' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'desc' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'price' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
            'tags' => [
                'type' => 'TEXT',
            ],
            'locations' => [
                'type' => 'TEXT',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('course');
        $this->forge->addForeignKey('provider_id', 'user', 'id', 'CASCADE', 'CASCADE');
        $this->db->query('SET foreign_key_checks = 1');
    }

    public function down()
    {
        $this->db->query('SET foreign_key_checks = 0');
        $this->forge->dropTable('course');
        $this->db->query('SET foreign_key_checks = 1');
    }
}