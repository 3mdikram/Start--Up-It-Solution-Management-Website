<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Sliders extends Seeder
{
    public function run()
    {
        helper('text');
        $data = [
            [
              'img_name'        => 'carousel-1.jpg',
              'img_path'        => 'website/slider/carousel-1.jpg',
              'unicode'          => random_string('alnum',150)
            ],
            [
                'img_name'        => 'carousel-2.jpg',
                'img_path'        => 'website/slider/carousel-2.jpg',
                'unicode'          => random_string('alnum',150)
            ],
          ];

          $this->db->table('sliders')->insertBatch($data);
    }
}
