<?php
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class UpdatePublisher extends MainController
{
    public function index()
    {
        $publisher_m = $this->loadModel('publisherModel');

        $data = array();

        if (isset($_GET['publisher_id']) && !empty($_GET['publisher_id']))
        {
            $data['publisher'] = $publisher_m->getPublisherById($_GET['publisher_id']);
        } else {
            echo "publisher not found";
        }
        
        if(isset($_POST['name'])){
            $publisher_m->updatePublisher($_POST);
            header("location:publisherController");
        }
        
        $h = new HeaderAdmin();
        $this->view('updatePublisher',$data);
        $f = new FooterAdmin();

    }
}
 ?>