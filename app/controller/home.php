<?php 

class Home extends MainController
{
    public function index()
    {
        $data['page_title'] = 'Home';
        $cate=$this->loadModel('categoriesModel');
        $data['cate']= $cate->getCategories(3);
        $data['cate_one'] = $cate->getCategoriesById(3);
        $data['header_cate'] = $cate->getParentCategory();

        $this->view("header",$data);
        $this->view("index",$data);
    }
}
