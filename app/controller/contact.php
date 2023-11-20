<?php 
require_once("header.php");
require_once("footer.php");

class Contact extends MainController
{
    public function index(){
    $header = new Header();
    $data['page-title'] = 'Contact';
    $this->view('contact',$data);
    
    $footer = new Footer();
}
}
?>