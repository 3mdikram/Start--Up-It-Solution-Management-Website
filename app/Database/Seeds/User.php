<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class User extends Seeder
{
    public function run()
    {
        helper('text','date');
        $data = [
            [
              'name'             =>'Ikram',
              'gender'           =>1,
              'dob'              =>Time::now(),
              'email'            =>'mdikram9771@gmail.com',
              'phone'            =>9785658334,
              'password'         =>password_hash('Ikram',PASSWORD_BCRYPT),
              'conpassword'      =>password_hash('Ikram',PASSWORD_BCRYPT),
              'status'            =>1,
              'role'            =>'isUser',
              'unicode'          => random_string('alnum',150)
            ],
          ];

          $this->db->table('users')->insertBatch($data);
    }
}
