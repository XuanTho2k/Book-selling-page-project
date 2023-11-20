<?php
class UserModel
{
    public function logIn($POST)
    {
        $db = new Database();

        $_SESSION['error'] = '';

        if (isset($POST['email']) && isset($POST['pw']) && $POST['email'] != '' && $POST['pw'] != '') {
            $arr['email'] = $POST['email'];
            $arr['pw'] = $POST['pw'];

            $query = "select * from user where user_email = :email && user_pw = :pw limit 1";


            $data = $db->read($query, $arr);
            if (is_array($data)) {
                $_SESSION['user_id'] = $data[0]->user_id;
                $_SESSION['user_name'] = $data[0]->user_name;
                $_SESSION['user_role'] = $data[0]->user_role;
                $_SESSION['error'] = '';
                header("Location:" . ROOT . "home");
            } else {
                $_SESSION['error'] = 'Wrong user name or password';
            }
        } else {
            $_SESSION['error'] = 'Please enter a valid username or password';
        }
    }
    public function signUp($POST)
    {
        $db = new Database();

        $_SESSION['error'] = '';

        if (isset($POST['email']) && (isset($POST['pw']) == isset($POST['confirm-pw']))) {
            $arr['email'] = $POST['email'];
            $query = "select * from user where user_email = :email";
            $data = $db->read($query, $arr);

            if (is_array($data)) {
                $_SESSION['error'] = 'Email already exists. Please enter another';
            } else {
                $arr['pw'] = $POST['pw'];
                $query = "Insert into user (user_email, user_pw) VALUES (:email, :pw)";
                foreach ($arr as $key => $val) {
                    echo $key . $val;
                }

                $data = $db->write($query, $arr);

                $_SESSION['sign-up'] = 'Sign up successfully. Please enter your account';
                header("Location:" . ROOT . "login");
            }
        } else {
            $_SESSION['error'] = 'Please enter a valid email or password';
        }
    }
    public function checkLoggedIn()
    {
        if (isset($_SESSION['user_url'])) {
            $arr['user_url'] = $_SESSION['user_url'];
        }
    }
    public function logOut()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
    }
}
