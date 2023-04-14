<?php

namespace App\Controllers;

use App\Models\Website\Requestquote;
use App\Models\Website\Pricingplan;
use App\Models\Website\Projectclient;
use App\Models\Website\Service;
use App\Models\Website\Showservices;
use App\Models\Website\Slider;

class Home extends BaseController
{
    public function index()
    {
        $data['navbar']=$this->navbar;
        $sld=new Slider;
        
        $data['slider']=$sld->findAll();
        $fact=new Projectclient;
        $data['fact']=$fact->findAll();

        $serv=new Service;
        $data['service']=$serv->findAll();

        $ppl=new Pricingplan;
        $data['Pricingplan']=$ppl->findAll();

        $rqu=new Requestquote;
        $data['Requestquote']=$rqu->findAll();

        $serv=new Showservices;
        $data['Showservices']=$serv->findAll();

        $query = $this->db->table('clientestimonials')->get();
        $data['client']=$query->getResultArray();

        $data['team']=$this->team;
        $data['vendors']=$this->vendor;

        $blog = $this->db->table('blogs')->get();
        $data['blog']=$blog->getResultArray();

        return view('welcome_message',$data);
    }
    public function addUserQuote(){
        $request = \Config\Services::request();
        $name=$request->getPost('name');
        $email=$request->getPost('email');
        $service=$request->getPost('service');
        $message=$request->getPost('message');
        $data=[
            'name'                => $name,
            'email'               => $email,
            'showservices_id'     =>$service,	
            'message'             => $message,
            'unicode'             => random_string('alnum',150)
        ];
        $db= \Config\Database::connect();
        $builder=$db->table('requestquoteforms');
        $builder->insert($data);
        echo 1;
    }
}
