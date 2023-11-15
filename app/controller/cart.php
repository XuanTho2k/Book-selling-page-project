<?php 

class Cart extends MainController
{
    public function index()
    {
        $data['page_title'] = 'Cart';
        $this->view('cart',$data);
    }
}

?>