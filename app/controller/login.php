<?php
class Login extends MainController
{
    public function index()
    {
        $data['page_title'] = 'Login';

        if (isset($_POST['email'])) {

            $user = $this->loadModel('user');
            $user->logIn($_POST);   
        }
        $this->view('login', $data);
    }
}
