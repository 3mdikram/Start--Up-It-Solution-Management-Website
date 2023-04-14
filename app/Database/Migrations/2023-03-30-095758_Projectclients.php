<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Projectclients extends Migration
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
            'happy_client' => [
                'type'       => 'BIGINT',
                'null'=>false
            ],
            'project_done' => [
                'type'       => 'BIGINT',
                'null'=>false
            ],
            'win_award' => [
                'type'       => 'BIGINT',
                'null'=>false
            ],
            'unicode' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'=>false
            ],
            ]);
            $this->forge->addKey('id',true);
            $this->forge->createTable('projectclients');
    }

    public function down()
    {
        $this->forge->dropTable('projectclients');
    }
}
