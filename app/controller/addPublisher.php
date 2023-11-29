<?php
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class AddPublisher extends MainController
{
    public function index()
    {
        $publisher_m = $this->loadModel('publisherModel');

        $data = array();
        if(isset($_POST['name']) && !empty($_POST['name']))
        {
            $publisher_m->addNewPublisher($_POST);
            header("location:publisherController");
        }

        $h = new HeaderAdmin();
        $this->view('addPublisher',$data);
        $f = new FooterAdmin();
    }
}
?>