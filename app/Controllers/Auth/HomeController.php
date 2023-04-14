<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $tuser=$this->db->table('users');
        $tuser->where('role','isUser');
        $data['totalusers']=$tuser->countAll();
        //Total Service Count
        $tservice=$this->db->table('services');
        $data['tservice']=$tservice->countAll();
        //Total Plan Count
        $tp=$this->db->table('pricingplans');
        $data['tplan']=$tp->countAll();
        //Total Member
        $tpmember=$this->db->table('teamembers');
        $data['tmember']=$tpmember->countAll();
        //Side Bar data
        $data['sidebar']=$this->sidebar;

        return view('auth/home',$data);
    }
}
