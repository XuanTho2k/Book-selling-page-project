<?php 
require_once("header.php");
require_once("footer.php");
class Checkout extends MainController
{
    public function index()
    {
        $header = new Header();
        $data['title_page'] = 'Check Out';
        $this->view('checkout',$data);
        $footer = new Footer();
    }
}

?>