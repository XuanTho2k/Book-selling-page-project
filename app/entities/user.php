<?php 

class User 
{
    private $id;
    private $username;
    private $password;
    private $email;
    private $img;
    private $tel;
    public function __construct($id,$username,$pw,$email,$img,$tel)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $pw;
        $this->email = $email;
        $this->img = $img;
        $this->tel = $tel;
    }
    private function getId()
    {
        return $this->id;
    }
    private function setId($id)
    {
        $this->id = $id;
    }
    private function getName()
    {
        return $this->username;
    }
    private function setName($name)
    {
        $this->username = $name;
    }
    private function getPw()
    {
        return $this->password;
    }
    private function setPw($pw)
    {
        $this->password = $pw;
    }
    private function getEmail()
    {
        return $this->email;
    }
    private function setEmail($email)
    {
        $this->email = $email;
    }
    private function getImg()
    {
        return $this->img;
    }
    private function setImg($img)
    {
        $this->img = $img; 
    }
    private function getTel()
    {
        return $this->tel;
    }
    private function setTel($tel)
    {
        $this->tel = $tel;
    }
}

?>