<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\Auth\Contactus;

class Showcontactmessage extends BaseController
{
    public function index()
    {
         //Side Bar data
         $data['sidebar']=$this->sidebar;
         $cdata=new Contactus();
         $data['contact']=$cdata->paginate(3);
         $data['pager']=$cdata->pager;
         return view('auth/show_contact_us',$data);
    }
}
