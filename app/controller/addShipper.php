<?php
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class AddShipper extends MainController
{
    public function index()
    {
        $shipper_m = $this->loadModel('shipperModel');

        $data = array();
        if(isset($_POST['name']) && !empty($_POST['name']))
        {
            $shipper_m->addNewShipper($_POST);
            header("location:shipperController");
        }

        $h = new HeaderAdmin();
        $this->view('addShipper',$data);
        $f = new FooterAdmin();
    }
}
?>