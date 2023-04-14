<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Blog extends Seeder
{
    public function run()
    {
        helper('text');
        $data = [
            [
              'writter_name'              =>'Md Ikram',
              'title'        => 'Web Design',
              'message'              => 49.00,
              'img_name'         => 'HTML5 & CSS3',
              'img_path'         => 'Bootstrap v5',
              'created_at'       => 'Responsive Layout',
              'unicode'            => random_string('alnum',150)
            ],
            [
                'writter_name'              =>'Md Ikram',
                'title'        => 'Web Developer',
                'message'              => 49.00,
                'img_name'         => 'HTML5 & CSS3',
                'img_path'         => 'Bootstrap v5',
                'created_at'       => 'Responsive Layout',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'writter_name'              =>'Md Ikram',
                'title'        => 'Android Developer',
                'message'              => 49.00,
                'img_name'         => 'HTML5 & CSS3',
                'img_path'         => 'Bootstrap v5',
                'created_at'       => 'Responsive Layout',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'writter_name'              =>'Md Ikram',
                'title'        => 'Full Stack Web Developer',
                'message'              => 49.00,
                'img_name'         => 'HTML5 & CSS3',
                'img_path'         => 'Bootstrap v5',
                'created_at'       => 'Responsive Layout',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'writter_name'              =>'Md Ikram',
                'title'        => 'Full Stack Android Developer',
                'message'              => 49.00,
                'img_name'         => 'HTML5 & CSS3',
                'img_path'         => 'Bootstrap v5',
                'created_at'       => 'Responsive Layout',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'writter_name'              =>'Md Ikram',
                'title'        => 'Ruby On Rails Developer',
                'message'              => 49.00,
                'img_name'         => 'HTML5 & CSS3',
                'img_path'         => 'Bootstrap v5',
                'created_at'       => 'Responsive Layout',
                'unicode'            => random_string('alnum',150)
              ],
          ];

          $this->db->table('pricingplans')->insertBatch($data);
    }
}
