<?php 
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class UpdateUser extends MainController
{
    public function index()
    {
        $user_m = $this->loadModel("userModel");
        $role_m = $this->loadModel('roleModel'); 
                

        $data = array();


        $data['role_all'] = $role_m->getAllRole();
        $data['role_m'] = $role_m;
        if (isset($_GET['user_id']) && !empty($_GET['user_id']))
        {
            $data['user'] = $user_m->getUserById($_GET['user_id']);
        }
        
        if (isset($_POST['name'])){
            var_dump($_POST);
            $user_m->updateUser($_POST);

            header("location:userAdmin_All");

        }

        $h = new HeaderAdmin();
        $this->view('updateUser',$data);
        $f = new FooterAdmin();
    }
}

?>