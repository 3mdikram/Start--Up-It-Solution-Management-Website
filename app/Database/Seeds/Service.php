<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Service extends Seeder
{
    public function run()
    {
        helper('text');
        $data = [
            [
              'font_icon'        => '<i class="fa fa-shield-alt text-white"></i>',
              'title'        => 'Cyber Security',
              'about'        => 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed',
              'unicode'          => random_string('alnum',150)
            ],
            [
                'font_icon'        => '<i class="fa fa-chart-pie text-white"></i>',
                'title'        => 'Data Analytics',
                'about'        => 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed',
                'unicode'          => random_string('alnum',150)
              ],
              [
                'font_icon'        => '<i class="fa fa-code text-white"></i>',
                'title'        => 'Web Development',
                'about'        => 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed',
                'unicode'          => random_string('alnum',150)
              ],
              [
                'font_icon'        => '<i class="fab fa-android text-white"></i>',
                'title'        => 'Apps Development',
                'about'        => 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed',
                'unicode'          => random_string('alnum',150)
              ],
              [
                'font_icon'        => '<i class="fa fa-search text-white"></i>',
                'title'        => 'SEO Optimization',
                'about'        => 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed',
                'unicode'          => random_string('alnum',150)
              ],
          ];

          $this->db->table('services')->insertBatch($data);
    }
}
