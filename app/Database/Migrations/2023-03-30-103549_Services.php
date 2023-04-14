<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Services extends Migration
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
            'font_icon' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'=>false
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'=>false
            ],
            'about' => [
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
            $this->forge->createTable('services');
    }

    public function down()
    {
        $this->forge->dropTable('services');
    }
}
