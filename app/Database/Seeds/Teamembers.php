<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Teamembers extends Seeder
{
    public function run()
    {
        helper('text');
        $data = [
            [
              'name'           =>"Partik Sharma",
              'profession'           =>"Php Developer",
              'img_name'        => 'team-1.jpg',
              'img_path'        => 'website/img/team-1.jpg',
              'twitter'           =>"https://twitter.com/login?lang=en",
              'facebook'           =>"https://www.facebook.com/login/",
              'instagram'           =>"https://www.instagram.com/accounts/login/",
              'indeed'           =>"https://in.indeed.com/q-login-jobs.html",
              'unicode'          => random_string('alnum',150)
            ],
            [
                'name'           =>"Kiran Kumari",
                'profession'           =>"Java Developer",
                'img_name'        => 'team-2.jpg',
                'img_path'        => 'website/img/team-2.jpg',
                'twitter'           =>"https://twitter.com/login?lang=en",
                'facebook'           =>"https://www.facebook.com/login/",
                'instagram'           =>"https://www.instagram.com/accounts/login/",
                'indeed'           =>"https://in.indeed.com/q-login-jobs.html",
                'unicode'          => random_string('alnum',150)
              ],
              [
                'name'           =>"Kabir Khan",
                'profession'           =>"Nodejs Developer",
                'img_name'        => 'team-3.jpg',
                'img_path'        => 'website/img/team-3.jpg',
                'twitter'           =>"https://twitter.com/login?lang=en",
                'facebook'           =>"https://www.facebook.com/login/",
                'instagram'           =>"https://www.instagram.com/accounts/login/",
                'indeed'           =>"https://in.indeed.com/q-login-jobs.html",
                'unicode'          => random_string('alnum',150)
              ],
          ];

          $this->db->table('teamembers')->insertBatch($data);
    }
}
