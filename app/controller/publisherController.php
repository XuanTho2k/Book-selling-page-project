<?php 
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class publisherController extends MainController
{
    public function index()
    {
        $publisher_m = $this->loadModel('publisherModel');

        $data = array();

        $data['publisher_all'] = $publisher_m->getAllPublishers();

        $h = new HeaderAdmin();
        $this->view('publisher',$data);
        $f = new FooterAdmin();
    }
}
?>