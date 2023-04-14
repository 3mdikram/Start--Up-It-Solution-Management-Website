<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Category extends Seeder
{
    public function run()
    {
        helper('text');
        $data = [
            [
              'name'              =>'Php Development',
              'unicode'            => random_string('alnum',150)
            ],
            [
                'name'              =>'Android Development',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Web Development',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Web Management',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'CMS Development',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Ruby Development',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Keyword Research',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Email Marketing',
                'unicode'            => random_string('alnum',150)
              ],
          ];

          $this->db->table('categories')->insertBatch($data);
    }
}
