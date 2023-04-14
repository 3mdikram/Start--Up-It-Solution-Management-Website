<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;
use App\Models\Website\Service;

class ServiceController extends BaseController
{
    public function index()
    {
        $serv=new Service;
        $data['service']=$serv->findAll();
        $data['navbar']=$this->navbar;
        $query = $this->db->table('clientestimonials')->get();
        $data['client']=$query->getResultArray();
        $data['vendors']=$this->vendor;
        return view('service',$data);
    }
}
