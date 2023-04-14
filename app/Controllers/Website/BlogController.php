<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;
use App\Models\Website\Category;
use App\Models\Website\Tag;

class BlogController extends BaseController
{
    public function index()
    {
        $query = $this->db->table('clientestimonials')->get();
        $data['client']=$query->getResultArray();
        $data['vendors']=$this->vendor;
        $data['navbar']=$this->navbar;

        $db = \Config\Database::connect();
        $query = $db->table('blogs as bl')
        ->select('bl.id, bl.writter_name, bl.title, bl.message, bl.img_path, bl.unicode, tg.name as tag, tg.id as tagId, cat.name as category, cat.id as catId')
        ->join('tags as tg', 'tg.id = bl.tag_id')
        ->join('categories as cat', 'cat.id = bl.categories_id')
        ->get();
        $data['blog'] = $query->getResultArray();
        
        //Ten Post Get
        $blog = $this->db->table('blogs')->orderBy('id', 'desc')->limit(4)->get();
        $data['blimit']=$blog->getResultArray();
        $cat=new Category;
        $data['cat']=$cat->findAll();
        //Tag Data Get 
        $tg=new Tag;
        $data['tag']=$tg->findAll();
        
        return view('blogs',$data);
    }
    public function postDetails($id){
        $query = $this->db->table('clientestimonials')->get();
        $data['client']=$query->getResultArray();
        $data['vendors']=$this->vendor;
        $data['navbar']=$this->navbar;

        //Get Post Detail
        $qu=$this->db->table('blogs')->where('id',$id)->get();
        $data['result']=$qu->getResultArray();

        //Category
        $cat=new Category;
        $data['cat']=$cat->findAll();

        //Recent Post
        $blog = $this->db->table('blogs')->orderBy('id', 'desc')->limit(4)->get();
        $data['blimit']=$blog->getResultArray();

        //Tags
        //Tag Data Get 
        $tg=new Tag;
        $data['tag']=$tg->findAll();
        
        return view('post_details',$data);
    }
    public function categoryByPost($id)
    {
        $query = $this->db->table('clientestimonials')->get();
        $data['client']=$query->getResultArray();
        $data['vendors']=$this->vendor;
        $data['navbar']=$this->navbar;

        $db = \Config\Database::connect();
        $query = $db->table('blogs as bl')
        ->select('bl.id, bl.writter_name, bl.title, bl.message, bl.img_path, bl.unicode, tg.name as tag, tg.id as tagId, cat.name as category, cat.id as catId')
        ->join('tags as tg', 'tg.id = bl.tag_id')
        ->join('categories as cat', 'cat.id = bl.categories_id')
        ->where('bl.categories_id',$id)
        ->get();
        $data['blog'] = $query->getResultArray();
        
        //Ten Post Get
        $blog = $this->db->table('blogs')->orderBy('id', 'desc')->limit(4)->get();
        $data['blimit']=$blog->getResultArray();
        $cat=new Category;
        $data['cat']=$cat->findAll();
        //Tag Data Get 
        $tg=new Tag;
        $data['tag']=$tg->findAll();
        
        return view('blogs',$data);
    }
    public function TagsByPost($id)
    {
        $query = $this->db->table('clientestimonials')->get();
        $data['client']=$query->getResultArray();
        $data['vendors']=$this->vendor;
        $data['navbar']=$this->navbar;

        $db = \Config\Database::connect();
        $query = $db->table('blogs as bl')
        ->select('bl.id, bl.writter_name, bl.title, bl.message, bl.img_path, bl.unicode, tg.name as tag, tg.id as tagId, cat.name as category, cat.id as catId')
        ->join('tags as tg', 'tg.id = bl.tag_id')
        ->join('categories as cat', 'cat.id = bl.categories_id')
        ->where('bl.tag_id',$id)
        ->get();
        $data['blog'] = $query->getResultArray();
        
        //Ten Post Get
        $blog = $this->db->table('blogs')->orderBy('id', 'desc')->limit(4)->get();
        $data['blimit']=$blog->getResultArray();
        $cat=new Category;
        $data['cat']=$cat->findAll();
        //Tag Data Get 
        $tg=new Tag;
        $data['tag']=$tg->findAll();
        
        return view('blogs',$data);
    }
}
