<?php 

class LogOut extends MainController
{
    public function index()
    {
        $data=[];
       $user = $this->loadModel('user');
       $user->logOut();
       $this->view('index',$data);
    }
}

?>