<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Showservices extends Seeder
{
    public function run()
    {
        helper('text');
        $data = [
            [
              'name'        =>"Php Development",
              'unicode'          => random_string('alnum',150)
            ],
            [
                'name'        =>"Java Development",
                'unicode'          => random_string('alnum',150)
              ],
              [
                'name'        =>"Android Development",
                'unicode'          => random_string('alnum',150)
              ],
              [
                'name'        =>"Python Development",
                'unicode'          => random_string('alnum',150)
              ],
              [
                'name'        =>"Cyber Security",
                'unicode'          => random_string('alnum',150)
              ],
              [
                'name'        =>"Data Analytics",
                'unicode'          => random_string('alnum',150)
              ],
              [
                'name'        =>"Web Development",
                'unicode'          => random_string('alnum',150)
              ],
              [
                'name'        =>"SEO Optimization",
                'unicode'          => random_string('alnum',150)
              ],
              [
                'name'        =>"Website Development",
                'unicode'          => random_string('alnum',150)
              ],
          ];

          $this->db->table('showservices')->insertBatch($data);
    }
}
