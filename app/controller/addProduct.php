<?php
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class AddProduct extends MainController
{
    public function index()
    {
        $data = array();
        //load model
        $cate_m = $this->loadModel('categoriesModel');
        $author_m = $this->loadModel('authorModel');
        $publisher_m = $this->loadModel('publisherModel');
        $book_m = $this->loadModel('bookModel');

        //get data
        $data['cate_all'] = $cate_m->getCategories();
        $data['author_all'] = $author_m->getAllAuthor();
        $data['publisher_all'] = $publisher_m->getAllPublishers();

        if(isset($_POST['name'])){
           $book_m->insertBook($_POST) ;
           header("location:productAdmin_All");
        }

        $header = new HeaderAdmin();
        $this->view('addProduct', $data);
        $footer = new FooterAdmin();
    }
}
