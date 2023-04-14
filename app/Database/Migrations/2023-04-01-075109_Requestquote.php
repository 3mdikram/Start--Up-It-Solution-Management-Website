<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Requestquote extends Migration
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
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'=>false
            ],
            'title_one' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
                'null'=>false
            ],
            'replay_one' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'=>false
            ],
            'replay_two' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'=>false
            ],
            'about' => [
                'type'       => 'TEXT',
                'null'=>false
            ],
            'call_text' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
                'null'=>false
            ],
            'phone' => [
                'type'       => 'BIGINT',
                'constraint' => '100',
                'null'=>false
            ],
            'unicode' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'=>false
            ],
            ]);
            $this->forge->addKey('id',true);
            $this->forge->createTable('requestquotes');
    }

    public function down()
    {
        $this->forge->dropTable('requestquotes');
    }
}
