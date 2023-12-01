<?php
class User
{
    private $id;
    private $name;
    private $role;
    private $img;
    private $tel;
    private $email;
    private $pw;
    public function __construct($id, $name, $pw, $role, $img, $tel, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->role = $role;
        $this->img = $img;
        $this->tel = $tel;
        $this->email = $email;
        $this->pw = $pw;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }
    public function getImg()
    {
        return $this->img;
    }
    public function setImg($img)
    {
        $this->img = $img;
    }
    public function getTel()
    {
        return $this->tel;
    }
    public function setTel($tel)
    {
        $this->tel = $tel;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPw()
    {
        return $this->pw;
    }
    public function setPw($pw)
    {
        $this->pw = $pw;
    }
}
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
                $_SESSION['user_img'] = $data[0]->user_img;
                $_SESSION['user_tel'] = $data[0]->user_tel;
                $_SESSION['user_email'] = $data[0]->user_email;
                $_SESSION['user_pw'] = $data[0]->user_pw;
                $_SESSION['error'] = '';
                $data = json_decode(json_encode($data), true);
                foreach ($data as $row) {
                    $user = new User(
                        $row['user_id'],
                        $row['user_name'],
                        $row['user_pw'],
                        $row['user_role'],
                        $row['user_img'],
                        $row['user_tel'],
                        $row['user_email']
                    );
                    header("location:home");

                    return $user;
                }
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
        unset($_SESSION['user']);
        
    }
    public function getAllUser()
    {
        $db = new Database();
        $query = "select * from user";
        $data =  $db->read($query);
        $data = json_decode(json_encode($data), true);
        $users = array();
        foreach ($data as $row) {
            $user = new User(
                $row['user_id'],
                $row['user_name'],
                $row['user_pw'],
                $row['user_role'],
                $row['user_img'],
                $row['user_tel'],
                $row['user_email']
            );
            $users[] = $user;
        }
        return $users;
    }
    public function getRoleNameById($role_id)
    {
        $db = new Database();
        $query = "select role_name from role where role_id = :id";
        $arr['id'] = $role_id;
        $data = $db->read($query, $arr);

        if  ($data!= null){
            return $data[0]->role_name;
        } else {
            return null;
        }

    }
    public function deleteUser($id)
    {
        $db = new Database();
        $query = "DELETE FROM `user` WHERE user_id = :id";
        $arr['id'] = $id;
        $db->write($query,$arr);
    }
    public function addUser($data)
    {
        $db =new Database();
        if ($_FILES['img']['error'] != 4){
        $query = "INSERT INTO `user`(`user_name`, `user_email`, `user_pw`,
        `user_role`, `user_img`, `user_tel`) VALUES
        (:name,:email,:pw,:role,:img,:tel)";
        $data['img'] = $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['type'];

        move_uploaded_file($img_tmp, ASSETS."bookstore/img/".$data['img']);
        } else {
            $query = "INSERT INTO `user`(`user_name`, `user_email`, `user_pw`,
            `user_role`,  `user_tel`) VALUES
            (:name,:email,:pw,:role,:tel)";
        }
        $db->write($query,$data);
    }
    public function getUserById($id)
    {
        $db = new Database();
        $query = "select * from user where user_id = :id";
        $arr['id'] = $id;
        $data = $db->read($query,$arr);
        $data = json_decode(json_encode($data), true);
        foreach ($data as $row){
            $user = new User(
                $row['user_id'],
                $row['user_name'],
                $row['user_pw'],
                $row['user_role'],
                $row['user_img'],
                $row['user_tel'],
                $row['user_email'] 
            );
        }
        return $user;
    }
    public function updateUser($data)
    {
        $db = new Database();
        if ($_FILES['img']['error'] != 4)
        {
            $query = "UPDATE `user` SET
            `user_name`=:name,`user_email`=:email,`user_pw`=:pw,`user_role`=:role,`user_img`=:img,`user_tel`=:tel
            WHERE user_id = :hidden_id";

            $data['img'] = $_FILES['img']['name'];
            $img_tmp = $_FILES['img']['type'];

            move_uploaded_file($img_tmp,ASSETS."bookstore/img/".$data['img']);
        } else if (!isset($data['role'])) {
            $query = "UPDATE `user` SET
            `user_name`=:name,`user_email`=:email,`user_pw`=:pw,`user_tel`=:tel
            WHERE user_id = :hidden_id";
        } else {
            $query = "UPDATE `user` SET
            `user_name`=:name,`user_email`=:email,`user_pw`=:pw,`user_role`=:role,`user_tel`=:tel
            WHERE user_id = :hidden_id";
        }
        $db->write($query,$data);
    }
        
}
