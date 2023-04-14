<?php

namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;

class Webnavbars extends Seeder
{
    public function run()
    {
        helper('text');
        $data = [
            [
              'page_name'        => 'About',
              'page_icon'        => '643 Banana Street, 135',
              'page_url'       => 'about',
              'unicode'          => random_string('alnum',150)
            ],
            [
              'page_name'        => 'Service',
              'page_icon'        => '112 Lemon Street, 121',
              'page_url'         => 'service',
              'unicode'          => random_string('alnum',150)
            ],
            [
              'page_name'        => 'Blog',
              'page_icon'        => '112 Lemon Street, 121',
              'page_url'         => 'category',
              'unicode'          => random_string('alnum',150)
            ]
          ];

          $this->db->table('webnavbars')->insertBatch($data);
    }
}
