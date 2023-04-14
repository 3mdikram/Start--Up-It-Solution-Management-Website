<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Requestquoteform extends Migration
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
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'=>false
            ],
            'showservices_id' => [
                'type'       => 'INT',
                'null'=>false
            ],
            'message' => [
                'type'       => 'TEXT',
                'null'=>false
            ],
            'unicode' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'=>false
            ],
            ]);
            $this->forge->addKey('id',true);
            $this->forge->createTable('requestquoteforms');
    }

    public function down()
    {
        $this->forge->dropTable('requestquoteforms');
    }
}
