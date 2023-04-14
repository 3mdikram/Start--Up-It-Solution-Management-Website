<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pricingplan extends Seeder
{
    public function run()
    {
        helper('text');
        $data = [
            [
              'title'              =>'Basic Plan',
              'title_about'        => 'FOR SMALL SIZE BUSINESS',
              'price'              => 49.00,
              'access_one'         => 'HTML5 & CSS3',
              'access_two'         => 'Bootstrap v5',
              'access_three'       => 'Responsive Layout',
              'access_four'        => 'Cross-browser Support',
              'access_icon'        => '<i class="fa fa-check text-primary pt-1"></i>',
              'not_access_icon'        => '<i class="fa fa-times text-danger pt-1"></i>',
              'unicode'            => random_string('alnum',150)
            ],
            [
                'title'              =>'Standard Plan',
                'title_about'        => 'FOR MEDIUM SIZE BUSINESS',
                'price'              => 99.00,
                'access_one'         => 'HTML5 & CSS3',
                'access_two'         => 'Bootstrap v5',
                'access_three'       => 'Responsive Layout',
                'access_four'        => 'Cross-browser Support',
                'access_icon'        => '<i class="fa fa-check text-primary pt-1"></i>',
                'not_access_icon'        => '<i class="fa fa-times text-danger pt-1"></i>',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'title'              =>'Advanced Plan',
                'title_about'        => 'FOR LARGE SIZE BUSINESS',
                'price'              => 149.00,
                'access_one'         => 'HTML5 & CSS3',
                'access_two'         => 'Bootstrap v5',
                'access_three'       => 'Responsive Layout',
                'access_four'        => 'Cross-browser Support',
                'access_icon'        => '<i class="fa fa-check text-primary pt-1"></i>',
                'not_access_icon'        => '<i class="fa fa-times text-danger pt-1"></i>',
                'unicode'            => random_string('alnum',150)
              ],
          ];

          $this->db->table('pricingplans')->insertBatch($data);
    }
}
