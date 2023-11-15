<?php 

class Detail extends MainController
{
    public function index()
    {
        $data['page_title'] = 'Product Details';
        $this->view('detail',$data);
    }
}
?>