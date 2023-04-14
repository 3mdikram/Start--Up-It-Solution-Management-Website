<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'=>false
            ],
            'gender' => [
                'type'       => 'INT',
                'null'=>false
            ],
            'dob' => [
                'type'       => 'DATE',
                'null'=>false
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'=>false
            ],
            'phone' => [
                'type'       => 'BIGINT',
                'null'=>false
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
                'null'=>false
            ],
            'conpassword' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
                'null'=>false
            ],
            'status' => [
                'type'       => 'INT',
                'default' =>0,
                'null'=>false
            ],
            'role' => [
                'type'       => 'ENUM',
                'constraint' => array('isAdmin','isUser'),
                'default'   =>'isUser',
                'null'=>false
            ],
            'unicode' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'=>false
            ],
            ]);
            $this->forge->addKey('id',true);
            $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
