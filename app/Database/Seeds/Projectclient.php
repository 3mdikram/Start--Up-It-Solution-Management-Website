<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Projectclient extends Seeder
{
    public function run()
    {
        helper('text');
        $data = [
            [
              'happy_client'        => 12345,
              'project_done'        => 12345,
              'win_award'        => 12345,
              'unicode'          => random_string('alnum',150)
            ],
          ];

          $this->db->table('projectclients')->insertBatch($data);
    }
}
