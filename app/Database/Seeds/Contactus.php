<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Contactus extends Seeder
{
    public function run()
    {
        helper('text');
        $data = [
            [
              'name'              =>'Md Ikram',
              'email'              =>'mdikram9771@gmail.com',
              'subject'              =>'Contact Me',
              'message'              =>'I need a full-stack developer',
              'unicode'            => random_string('alnum',150)
            ],
            [
                'name'              =>'Rahul',
                'email'              =>'rahul6343@gmail.com',
                'subject'              =>'Hello Dear',
                'message'              =>'How are you',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Karan',
                'email'              =>'karan4544@gmail.com',
                'subject'              =>'Hello Dear',
                'message'              =>'How are you',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Samir',
                'email'              =>'samir353@gmail.com',
                'subject'              =>'Hello Dear',
                'message'              =>'How are you',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Pawan',
                'email'              =>'pawan464@gmail.com',
                'subject'              =>'Hello Dear',
                'message'              =>'How are you',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Pawan',
                'email'              =>'hellopawan@gmail.com',
                'subject'              =>'Hello Dear',
                'message'              =>'How are you',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Sam',
                'email'              =>'hellosam@gmail.com',
                'subject'              =>'Hello Dear',
                'message'              =>'How are you',
                'unicode'            => random_string('alnum',150)
              ],
              [
                'name'              =>'Sikendar',
                'email'              =>'sikendar43@gmail.com',
                'subject'              =>'Hello Dear',
                'message'              =>'How are you',
                'unicode'            => random_string('alnum',150)
              ],
          ];

          $this->db->table('contactus')->insertBatch($data);
    }
}
