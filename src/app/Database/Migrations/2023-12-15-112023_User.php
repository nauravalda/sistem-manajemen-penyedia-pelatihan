<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        echo "Migrating User";
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type' => 'TEXT',
            ],
            'name' => [
                'type' => 'TEXT',
            ],
            'phone_number' => [
                'type' => 'TEXT',
            ],
            'password' => [
                'type' => 'TEXT',
            ],
            'api_token' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }

}