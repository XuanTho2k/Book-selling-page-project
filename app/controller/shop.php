<?php

class Shop extends MainController
{
    public function index()
    {
        
        $data['page_title'] = 'Shop';
        $category = $this->loadModel('categoriesModel');
        $cate =$category->getCategories(3);
        var_dump($cate);
        $this->view('shop', $data);
    }
}
