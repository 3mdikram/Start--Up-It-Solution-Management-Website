<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        $data['team']=$this->team;
        $data['vendors']=$this->vendor;
        $data['navbar']=$this->navbar;
        return view('about',$data);
    }
}
