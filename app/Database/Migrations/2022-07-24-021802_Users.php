<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null' => false,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '250',
                'null' => false,
                'unique' => true,
            ],
            'password' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'role' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false
            ],
            'softDelete' => [
                'type' => 'INT',
                'constraint' => 1,
                'null' => false,
                'unsigned' => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'last_activity' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
