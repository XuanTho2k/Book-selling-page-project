<?php
require_once "header.php";
require_once "footer.php";
class BillUser extends MainController
{
    public function index() 
    {
        $data = array();
        $shipper_m = $this->loadmodel('shipperModel');
        $bill_m = $this->loadModel('billModel');
        $data['bill_all'] = $bill_m ->getBillByUserId($_SESSION['user_id']);
        $data['shipper_m'] = $shipper_m;


        $h = new Header();
        $this->view('billuser',$data);
        $f = new Footer();
    }
}
?>