<?php
require_once("header.php");
require_once("footer.php");
class Signup extends MainController
{
    public function index()
    {
        $header = new Header();
        $data['page_title'] = 'Sign Up';
        if (isset($_POST['email'])) {
            $user = $this->loadModel('user');
            $user->signUp($_POST);
        }



        $this->view('signup', $data);
        $footer = new Footer();
    }
}
