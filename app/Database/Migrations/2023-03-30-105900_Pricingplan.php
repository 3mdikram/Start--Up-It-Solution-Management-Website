<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pricingplan extends Migration
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
            'title_about' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
                'null'=>false
            ],
            'price' => [
                'type'       => 'FLOAT',
                'null'=>false
            ],
            'access_one' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'=>false
            ],
            'access_two' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'=>false
            ],
            'access_three' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'=>false
            ],
            'access_four' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
                'null'=>false
            ],
            'access_icon' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'=>false
            ],
            'not_access_icon' => [
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
            $this->forge->createTable('pricingplans');
    }

    public function down()
    {
        $this->forge->dropTable('pricingplans');
    }
}
