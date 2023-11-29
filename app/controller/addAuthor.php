<?php 
require "headerAdmin.php";
require "footerAdmin.php";
class AddAuthor extends MainController
{
    public function index()
    {
        $author_m = $this->loadModel('authorModel');
        $data = array();

        if(isset($_POST['name']) && !empty($_POST['name']))
        {
            $author_m->addNewAuthor($_POST);
            header("location:authorController");
        }

        $h = new HeaderAdmin();
        $this->view('addAuthor',$data);
        $f = new FooterAdmin();
    }
}
?>