<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Sidebar extends Seeder
{
    public function run()
    {
        helper('text');
        $data = [
            [
              'page_name'        => 'Add New Sidebar Page',
              'page_icon'        => '<i class="bi bi-house-add-fill"></i>',
              'page_url'       => 'sidebar_page_add',
              'unicode'          => random_string('alnum',150)
            ],
            [
              'page_name'        => 'Sidebar P-Update/Delete',
              'page_icon'        => '<i class="bi bi-pencil"></i>',
              'page_url'         => 'sidebar_page_update',
              'unicode'          => random_string('alnum',150)
            ],
            [
              'page_name'        => 'Web-Header P-Update',
              'page_icon'        => '<i class="bi bi-pencil-fill"></i>',
              'page_url'         => 'update_web_header_page',
              'unicode'          => random_string('alnum',150)
            ],
            [
              'page_name'        => 'Web Service',
              'page_icon'        => '<i class="bi bi-boxes"></i>',
              'page_url'         => 'web_service',
              'unicode'          => random_string('alnum',150)
            ],
            [
              'page_name'        => 'Price Plans',
              'page_icon'        => '<i class="bi bi-boxes"></i>',
              'page_url'         => 'price_plans',
              'unicode'          => random_string('alnum',150)
            ],
            [
              'page_name'        => 'Show Contactus',
              'page_icon'        => '<i class="bi bi-chat-dots-fill"></i>',
              'page_url'         => 'show_contact_us',
              'unicode'          => random_string('alnum',150)
            ],
            [
              'page_name'        => 'Client About',
              'page_icon'        => '<i class="bi bi-person-circle"></i>',
              'page_url'         => 'client_about',
              'unicode'          => random_string('alnum',150)
            ],
            [
              'page_name'        => 'Team Members',
              'page_icon'        => '<i class="bi bi-person-circle"></i>',
              'page_url'         => 'team_members',
              'unicode'          => random_string('alnum',150)
            ],
            [
              'page_name'        => 'Blog Post',
              'page_icon'        => '<i class="bi bi-newspaper"></i>',
              'page_url'         => 'blog_post',
              'unicode'          => random_string('alnum',150)
            ],
            [
              'page_name'        => 'Blog Publish Post',
              'page_icon'        => '<i class="bi bi-eye-fill"></i>',
              'page_url'         => 'blog_publish_post',
              'unicode'          => random_string('alnum',150)
            ],
            [
              'page_name'        => 'Blog Draft Post',
              'page_icon'        => '<i class="bi bi-eye-slash"></i>',
              'page_url'         => 'blog_draft_post',
              'unicode'          => random_string('alnum',150)
            ],
          ];

          $this->db->table('sidebars')->insertBatch($data);
    }
}
