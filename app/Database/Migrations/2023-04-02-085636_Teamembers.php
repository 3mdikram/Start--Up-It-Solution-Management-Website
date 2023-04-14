<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Teamembers extends Migration
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
                'constraint' => '50',
                'null'=>false
            ],
            'profession' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
                'null'=>false
            ],
            'img_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'=>false
            ],
            'img_path' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'=>false
            ],
            'twitter' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'=>true
            ],
            'facebook' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'=>true
            ],
            'instagram' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'=>true
            ],
            'indeed' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'=>true
            ],
            'unicode' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'=>false
            ],
            ]);
            $this->forge->addKey('id',true);
            $this->forge->createTable('teamembers');
    }

    public function down()
    {
        $this->forge->dropTable('teamembers');
    }
}
