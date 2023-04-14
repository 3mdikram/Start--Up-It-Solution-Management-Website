<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Clientestimonial extends Seeder
{
    public function run()
    {
        helper('text');
        $data = [
            [
              'name'              =>'Prinka Raj',
              'profession'        => 'Php Developer',
              'about'         => 'Dolor et eos labore stet justo sed est sed sed sed dolor stet ametDolor et eos labore stet justo sed est sed sed sed dolor stet amet',
              'img_name'         => 'testimonial-1.jpg',
              'img_path'       => 'website/img/testimonial-1.jpg',
              'unicode'            => random_string('alnum',150)
            ],
            [
                'name'              =>'Rahul Kumar',
                'profession'        => 'Java Developer',
                'about'         => 'Dolor et eos labore stet justo sed est sed sed sed dolor stet ametDolor et eos labore stet justo sed est sed sed sed dolor stet amet',
                'img_name'         => 'testimonial-2.jpg',
                'img_path'       => 'website/img/testimonial-2.jpg',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Karan Kumar',
                'profession'        => 'Php Developer',
                'about'         => 'Dolor et eos labore stet justo sed est sed sed sed dolor stet ametDolor et eos labore stet justo sed est sed sed sed dolor stet amet',
                'img_name'         => 'testimonial-3.jpg',
                'img_path'       => 'website/img/testimonial-3.jpg',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Samir Kumar',
                'profession'        => 'Android Developer',
                'about'         => 'Dolor et eos labore stet justo sed est sed sed sed dolor stet ametDolor et eos labore stet justo sed est sed sed sed dolor stet amet',
                'img_name'         => 'testimonial-4.jpg',
                'img_path'       => 'website/img/testimonial-1.jpg',
                'unicode'            => random_string('alnum',150)
              ],
          ];

          $this->db->table('clientestimonials')->insertBatch($data);
    }
}
