<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Webnavbar extends Migration
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
            'page_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'=>false
            ],
            'page_icon' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'=>false
            ],
            'page_url' => [
                'type'       => 'VARCHAR',
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
            $this->forge->createTable('webnavbars');
    }

    public function down()
    {
        $this->forge->dropTable('webnavbars');
    }
}
