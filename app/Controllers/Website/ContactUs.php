<?php

namespace App\Controllers\Website;

use Config\Services;
use App\Controllers\BaseController;

class ContactUs extends BaseController
{
    public function index()
    {
        $query = $this->db->table('clientestimonials')->get();
        $data['client']=$query->getResultArray();
        $data['vendors']=$this->vendor;
        $data['navbar']=$this->navbar;
        return view('contact_us',$data);
    }
    public function SavedData(){
        $request = Services::request();
        $rules = [
            'name' => 'required',
            'email'    => 'required|valid_email',
            'subject' => 'required',
            'message' => 'required',
            
        ];
        if($this->validate($rules)){
            $data = [
                'name' => $this->$request->getPost('name'),
                'email'  => $this->$request->getPost('email'),
                'subject'  => $this->$request->getPost('subject'),
                'message'  => $this->$request->getPost('message'),
                'unicode'             => random_string('alnum',150)
            ];
            $builder=$this->db->table('contactus');
            $builder->insert($data);
            echo 1;
        }else{
            echo 0;
        }        
    }
}
