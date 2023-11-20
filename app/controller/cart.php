<?php 
require_once("header.php");
require_once("footer.php");
class Cart extends MainController
{
    public function index()
    {
        $header = new Header();

        //load model
        $shipper = $this->loadModel('shipperModel');
        $data['shipper_all'] = $shipper->getAllShipper();
        


        $data['page_title'] = 'Cart';
        $this->view('cart',$data);
        $footer = new Footer();
    }
}

?>