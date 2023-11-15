<?php 

class Contact extends MainController
{
    public function index(){
    $data['page-title'] = 'Contact';
    $this->view('contact',$data);
    }
}
?>