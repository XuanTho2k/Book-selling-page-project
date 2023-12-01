<?php
require_once "header.php";
require_once "footer.php";

class SettingUser extends MainController
{
    public function index()
    {

        $data = array();
        $user_m = $this->loadModel('userModel');
        $data['user'] = $user_m->getUserById($_SESSION['user_id']);

         
        if (isset($_POST['name'])){
            var_dump($_POST);
            $user_m->updateUser($_POST);

            header("location:settinguser");

        }

        $h = new Header();
        $this->view('userSetting',$data);
        $f = new Footer();
    }
}

?>