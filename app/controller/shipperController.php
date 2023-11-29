<?php 
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class ShipperController extends MainController
{
    public function index()
    {
        $shipper_m = $this->loadModel('shipperModel');

        $data = array();

        $data['shipper_all'] = $shipper_m->getAllShipper();
        $h = new HeaderAdmin();
        $this->view('shipper',$data);
        $f = new FooterAdmin();
    }
}
?>