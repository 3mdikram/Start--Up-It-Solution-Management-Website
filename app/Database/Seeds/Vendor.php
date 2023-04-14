<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Vendor extends Seeder
{
    public function run()
    {
        helper('text','date');
        $data = [
            [
              'img_name'        => 'vendor-1.jpg',
              'img_path'        => 'website/vendor/vendor-1.jpg',
              'created_at'     =>Time::now(),
              'unicode'          => random_string('alnum',150)
            ],
            [
                'img_name'        => 'vendor-2.jpg',
                'img_path'        => 'website/vendor/vendor-2.jpg',
                'created_at'     =>Time::now(),
                'unicode'          => random_string('alnum',150)
            ],
            [
                'img_name'        => 'vendor-3.jpg',
                'img_path'        => 'website/vendor/vendor-3.jpg',
                'created_at'     =>Time::now(),
                'unicode'          => random_string('alnum',150)
            ],
            [
                'img_name'        => 'vendor-4.jpg',
                'img_path'        => 'website/vendor/vendor-4.jpg',
                'created_at'     =>Time::now(),
                'unicode'          => random_string('alnum',150)
            ],
            [
                'img_name'        => 'vendor-5.jpg',
                'img_path'        => 'website/vendor/vendor-5.jpg',
                'created_at'     =>Time::now(),
                'unicode'          => random_string('alnum',150)
            ],
            [
                'img_name'        => 'vendor-6.jpg',
                'img_path'        => 'website/vendor/vendor-6.jpg',
                'created_at'     =>Time::now(),
                'unicode'          => random_string('alnum',150)
            ],
            [
                'img_name'        => 'vendor-7.jpg',
                'img_path'        => 'website/vendor/vendor-7.jpg',
                'created_at'     =>Time::now(),
                'unicode'          => random_string('alnum',150)
            ],
            [
                'img_name'        => 'vendor-8.jpg',
                'img_path'        => 'website/vendor/vendor-8.jpg',
                'created_at'     =>Time::now(),
                'unicode'          => random_string('alnum',150)
            ],
            [
                'img_name'        => 'vendor-9.jpg',
                'img_path'        => 'website/vendor/vendor-9.jpg',
                'created_at'     =>Time::now(),
                'unicode'          => random_string('alnum',150)
            ],
          ];

          $this->db->table('vendors')->insertBatch($data);
    }
}
