<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\Website\Service;

class Webservicecont extends BaseController
{
    public function index()
    {
        //Side Bar data
        $data['sidebar']=$this->sidebar;
        $webs = $this->db->table('services')->get();
        $data['wservice']=$webs->getResultArray();
        return view('auth/web_services',$data);
    }
    public function addnewebservice()
    {
        helper('text');
        $rules=[
            'servicetitle'=>'required|max_length[50]',
            'pageicon'=>'required|max_length[50]',
            'about'=>'required|max_length[100]',
        ];
        $data = [
            'title' =>$this->request->getPost('servicetitle'),
            'font_icon'  =>$this->request->getPost('pageicon'),
            'about'  =>$this->request->getPost('about'),
            'unicode'=>random_string('alnum',150)
        ];
        if($this->validate($rules)){
            $formModel = $this->db->table('services');
            $formModel->insert($data);
            $this->session->setFlashdata('success', 'Successfully Added New Service!');
            return redirect()->to(base_url('admin/web_service'));
        }else{
            // $data['sidebar']=$this->sidebar;
            // $data['validation'] = $this->validator;
            return redirect()->to(base_url('admin/web_service'));
        }
    }
    public function updateserviceswp()
    {
        $serviceName =$this->request->getVar('serviceName');
        $serviceIcon =$this->request->getVar('serviceIcon');
        $serviceAbout  =$this->request->getVar('serviceAbout');
        $id=$this->request->getVar('pId');
        $sbup =new Service();
        $sbup->set('title',$serviceName);
        $sbup->set('font_icon',$serviceIcon);
        $sbup->set('about',$serviceAbout);
        $sbup->where('id',$id);
        $sbup->update();
        echo 1;
    }
    public function deleteDataService($id){
        $sbup =new Service();
        $sbup->where('id',$id);
        $sbup->delete();
       echo 1;
}
}
