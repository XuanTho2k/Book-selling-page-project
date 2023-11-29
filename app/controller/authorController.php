<?php 
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class AuthorController extends MainController
{
    public function index()
    {
        $author_m = $this->loadModel('authorModel');
        
        $data = array();
        $data['author_all'] = $author_m->getAllAuthor();

        $h = new HeaderAdmin();
        $this->view('author',$data);
        $f = new FooterAdmin();
        
    }
}
?>