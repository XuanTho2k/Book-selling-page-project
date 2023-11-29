<?php 
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class ProductAdmin_All extends MainController
{
    //load model
    public function index()
    {
        //load model
        $book_m = $this->loadModel('bookModel');
        $data['author_model'] = $this->loadModel('authorModel');
        $data['publisher_model']= $this->loadModel('publisherModel');
        //
        $data['book_all']=$book_m->getAllBook();

        //
        $header = new HeaderAdmin();
        $this->view('productAdmin',$data);
        $footer = new FooterAdmin();
        
    }

}
?>