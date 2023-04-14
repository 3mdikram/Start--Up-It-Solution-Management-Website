<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Requestquote extends Seeder
{
    public function run()
    {
        helper('text');
        $data = [
            [
              'title'        => "Request A Quote",
              'title_one'        => "Need A Free Quote? Please Feel Free to Contact Us",
              'replay_one'        => "Reply within 24 hours",
              'replay_two'        => "24 hrs telephone support",
              'about'        => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book",
              'call_text'        => "Call to ask any question",
              'phone'        => 9785658334,
              'unicode'          => random_string('alnum',150)
            ],
          ];

          $this->db->table('requestquotes')->insertBatch($data);
    }
}
