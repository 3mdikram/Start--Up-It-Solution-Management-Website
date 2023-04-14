<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\Auth\Sidebar;
use App\Models\Website\Webnavbar;

class Webheaderpageadd extends BaseController
{
    public function index()
    {
         //Side Bar data
         $data['sidebar']=$this->sidebar;
         return view('auth/web_header_page_add',$data);
    }
    public function wpnewpageadd()
    {
        helper('text');
        $rules=[
            'pagename'=>'required|max_length[50]',
            'pageicon'=>'required|max_length[50]',
            'pageurl'=>'required|max_length[50]',
        ];
        $data = [
            'page_name' =>$this->request->getPost('pagename'),
            'page_icon'  =>$this->request->getPost('pageicon'),
            'page_url'  =>$this->request->getPost('pageurl'),
            'unicode'=>random_string('alnum',150)
        ];
        if($this->validate($rules)){
            $formModel = $this->db->table('webnavbars');
            $formModel->insert($data);
            $this->session->setFlashdata('success', 'Successfully Added New Page!');
            return redirect()->to(base_url('admin/add_web_header_page'));
        }else{
            // $data['sidebar']=$this->sidebar;
            // $data['validation'] = $this->validator;
            return redirect()->to(base_url('admin/add_web_header_page'));
        }
    }
    public function getpageshow()
    {
         //Side Bar data
         $web=new Webnavbar();
         $data['webnav']=$web->findAll();
         $data['sidebar']=$this->sidebar;
         return view('auth/web_header_page_update',$data);
    }
    public function whpupdated()
    {
        $rules=[
            'pagename'=>'required|max_length[50]',
            'pageicon'=>'required|max_length[50]',
            'pageurl'=>'required|max_length[50]',
        ];
       
        $page_name =$this->request->getVar('pagename');
        $page_icon =$this->request->getVar('pageicon');
        $page_url  =$this->request->getVar('pageurl');
        $id=$this->request->getVar('pageid');
        if($this->validate($rules)){
            $sbup=new Webnavbar();
            $sbup->set('page_name',$page_name);
            $sbup->set('page_icon',$page_icon);
            $sbup->set('page_url',$page_url);
            $sbup->where('id',$id);
            $sbup->update();
            $this->session->setFlashdata('success', 'Successfully Update!');
            return redirect()->to(base_url('admin/update_web_header_page'));
        }else{
            // $data['sidebar']=$this->sidebar;
            // $data['validation'] = $this->validator;
            return redirect()->to(base_url('admin/update_web_header_page'));
        }
    }
    public function dltwhp($id){
        $sbup=new Webnavbar();
        $sbup->where('id',$id);
        $sbup->delete();
        return redirect()->to(base_url('admin/update_web_header_page'));
}
}
