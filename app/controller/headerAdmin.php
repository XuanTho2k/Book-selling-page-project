<?php 
class HeaderAdmin extends MainController
{
    public function __construct()
    {
        $data = array();
        $this->view('headerAdmin',$data);
    }
}

?>