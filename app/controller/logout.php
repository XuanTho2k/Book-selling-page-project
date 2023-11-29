<?php 

class LogOut extends MainController
{
    public function index()
    {
        $data=[];
       $user = $this->loadModel('userModel');
       $user->logOut();
       //$this->view('index',$data);
       header("location:home");
    }
}

?>