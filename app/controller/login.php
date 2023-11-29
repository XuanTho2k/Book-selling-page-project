<?php
require_once("header.php");
require_once("footer.php");
class Login extends MainController
{
    public function index()
    {
        $data['page_title'] = 'Login';

        if (isset($_POST['email'])) {

            $user = $this->loadModel('userModel');
            $newUser = $user->logIn($_POST);
            $_SESSION['user'] = $newUser;
            var_dump($newUser);
        
    }
        $header = new Header();
        $this->view('login', $data);
        $footer = new Footer();
    }
}
