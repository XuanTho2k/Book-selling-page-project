<?php 

class Checkout extends MainController
{
    public function index()
    {
        $data['title_page'] = 'Check Out';
        $this->view('checkout',$data);
    }
}

?>