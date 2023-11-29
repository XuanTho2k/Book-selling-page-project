<?php 
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class  UserAdmin_All extends MainController
{
    public function index()
    {
        $user_m = $this->loadModel('userModel');

        $data['user_all'] = $user_m->getAllUser();
        $data['user_m'] = $user_m;

        $h = new HeaderAdmin();
        $this->view('userAdmin_All',$data);
        $f = new FooterAdmin();


    }
}

?>