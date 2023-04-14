<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Clientabout extends BaseController
{
    public function index()
    {
        $ca=$this->db->table('clientestimonials')->get();
        $data['cabout']=$ca->getResultArray();
        //Side Bar data
        $data['sidebar']=$this->sidebar;
        return view('auth/client_about',$data);
    }
    public function teamembershow()
    {
        $ca=$this->db->table('teamembers')->get();
        $data['teamember']=$ca->getResultArray();
        //Side Bar data
        $data['sidebar']=$this->sidebar;
        return view('auth/team_member',$data);
    }
}
