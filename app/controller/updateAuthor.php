<?php
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class UpdateAuthor extends MainController
{
    public function index()
    {
        $author_m = $this->loadModel('authorModel');

        $data = array();

        if (isset($_GET['author_id']) && !empty($_GET['author_id']))
        {
            $data['author'] = $author_m->getAuthorById($_GET['author_id']);
        } else {
            echo "Author not found";
        }
        
        if(isset($_POST['name'])){
            $author_m->updateAuthor($_POST);
            header("location:authorController");
        }
        
        $h = new HeaderAdmin();
        $this->view('updateAuthor',$data);
        $f = new FooterAdmin();

    }
}
 ?>