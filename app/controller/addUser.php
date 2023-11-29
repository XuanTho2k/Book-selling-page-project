<?php
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class AddUser extends MainController
{
    public function index()
    {
        $user_m = $this->loadModel('userModel');
        $role_m = $this->loadModel('roleModel');
        $data = array();
        $data['role_all'] = $role_m->getAllRole();
        
        if (isset($_POST['name'])) {
            $user_m->addUser($_POST);
             header("location:userAdmin_All");
        }
        $h = new HeaderAdmin();
        $this->view('addUser', $data);
        $f = new FooterAdmin();
    }
}
