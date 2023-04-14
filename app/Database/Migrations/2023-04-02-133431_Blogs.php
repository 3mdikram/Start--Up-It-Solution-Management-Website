<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Blogs extends Migration
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
            'writter_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'=>false
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
                'null'=>false
            ],
            'message' => [
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
            'tag_id' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'       => true,
                'null'=>false
            ],
            'categories_id' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'       => true,
                'null'=>false
            ],
            'created_at' => [
                'type'       => 'TIMESTAMP',
                'null'=>true
            ],
            'updated_at' => [
                'type'       => 'TIMESTAMP',
                'null'=>true
            ],
            'deleted_at' => [
                'type'       => 'TIMESTAMP',
                'null'=>true
            ],
            'unicode' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'=>false
            ],
            ]);
            $this->forge->addKey('id',true);
            $this->forge->addForeignKey('tag_id', 'tags', 'id', 'CASCADE', 'CASCADE');
            $this->forge->addForeignKey('categories_id', 'categories', 'id', 'CASCADE', 'CASCADE');
            $this->forge->createTable('blogs');
    }

    public function down()
    {
        $this->forge->dropTable('blogs');
    }
}
