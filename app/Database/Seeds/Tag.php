<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Tag extends Seeder
{
    public function run()
    {
        helper('text');
        $data = [
            [
              'name'              =>'Design',
              'unicode'            => random_string('alnum',150)
            ],
            [
                'name'              =>'Development',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Marketing',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'SEO',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Writing',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Consulting',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Design',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Development',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Marketing',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Consulting',
                'unicode'            => random_string('alnum',150)
              ],
          ];

          $this->db->table('tags')->insertBatch($data);
    }
}
