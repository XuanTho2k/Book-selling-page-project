<?php
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class UpdateShipper extends MainController
{
    public function index()
    {
        $shipper_m = $this->loadModel('shipperModel');

        $data = array();

        if (isset($_GET['shipper_id']) && !empty($_GET['shipper_id']))
        {
            $data['shipper'] = $shipper_m->getShipperById($_GET['shipper_id']);
        } else {
            echo "shipper not found";
        }
        
        if(isset($_POST['name'])){
            $shipper_m->updateShipper($_POST);
            header("location:shipperController");
        }
        
        $h = new HeaderAdmin();
        $this->view('updateShipper',$data);
        $f = new FooterAdmin();

    }
}
 ?>