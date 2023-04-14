<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Priceplancont extends BaseController
{
    public function index()
    {
        //Side Bar data
        $data['sidebar']=$this->sidebar;
        $webs = $this->db->table('pricingplans')->get();
        $data['plans']=$webs->getResultArray();
        return view('auth/price_plans',$data);
    }
    public function addnewpriceplans()
    {
        helper('text');
        $rules=[
            'priceplantitle'=>'required|max_length[50]',
            'plansabout'=>'required|max_length[50]',
            'planprice'=>'required|max_length[100]',
            'accessone'=>'required|max_length[100]',
            'accesstwo'=>'required|max_length[100]',
            'accessthree'=>'required|max_length[100]',
            'accessfour'=>'required|max_length[100]',
            'accessicon'=>'required|max_length[100]',
            'accessnoticon'=>'required|max_length[100]',
        ];
        $data = [
            'title' =>$this->request->getPost('priceplantitle'),
            'title_about' =>$this->request->getPost('plansabout'),
            'price' =>$this->request->getPost('planprice'),
            'access_one' =>$this->request->getPost('accessone'),
            'access_two'  =>$this->request->getPost('accesstwo'),
            'access_three'  =>$this->request->getPost('accessthree'),
            'access_four'  =>$this->request->getPost('accessfour'),
            'access_icon'  =>$this->request->getPost('accessicon'),
            'not_access_icon'  =>$this->request->getPost('accessnoticon'),
            'unicode'=>random_string('alnum',150)
        ];
        if($this->validate($rules)){
            $formModel = $this->db->table('pricingplans');
            $formModel->insert($data);
            $this->session->setFlashdata('success', 'Successfully Added New Price Plan!');
            return redirect()->to(base_url('admin/price_plans'));
        }else{
            // $data['sidebar']=$this->sidebar;
            // $data['validation'] = $this->validator;
            return redirect()->to(base_url('admin/price_plans'));
        }
    }
    public function getpriceplandata($id)
    {
        
        $data_get = $this->db->table('pricingplans')->where('id',$id)->get();
        $result=$data_get->getResult();
        echo json_encode($result);
    }
    public function updatepricedatajx()
    {
        $title=$this->request->getVar('title');
        $title_about=$this->request->getVar('title_about');
        $price=$this->request->getVar('price');
        $access_one=$this->request->getVar('access_one');
        $access_two=$this->request->getVar('access_two');
        $access_three=$this->request->getVar('access_three');
        $access_four=$this->request->getVar('access_four');
        $access_icon=$this->request->getVar('access_icon');
        $not_access_icon=$this->request->getVar('not_access_icon');
        $id=$this->request->getVar('id');
        $data_get = $this->db->table('pricingplans')->where('id',$id)
        ->set("title",$title)
        ->set("title_about",$title_about)
        ->set("price",$price)
        ->set("access_one",$access_one)
        ->set("access_two",$access_two)
        ->set("access_three",$access_three)
        ->set("access_four",$access_four)
        ->set("access_icon",$access_icon)
        ->set("not_access_icon",$not_access_icon)
        ->update();
        if($data_get){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function deletepricecard($id){
        $data_get = $this->db->table('pricingplans')->where('id',$id)->delete();
        if($data_get){
            echo 1;
        }
    }
}
