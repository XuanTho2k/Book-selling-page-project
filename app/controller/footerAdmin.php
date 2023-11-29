<?php 
class FooterAdmin extends MainController
{
    public function __construct()
    {
        $data = array();
        $this->view('footerAdmin',$data);
    }
}
?>