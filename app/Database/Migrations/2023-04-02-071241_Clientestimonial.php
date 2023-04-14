<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clientestimonial extends Migration
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
            'about' => [
                'type'       => 'TEXT',
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
            'unicode' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'=>false
            ],
            ]);
            $this->forge->addKey('id',true);
            $this->forge->createTable('clientestimonials');
    }

    public function down()
    {
        $this->forge->dropTable('clientestimonials');
    }
}
