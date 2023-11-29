<?php
class DeleteUser extends MainController
{
    public function index()
    {
        $user_m = $this->loadModel('userModel');
        if (isset($_GET['user_id']) && $_GET['user_id'] != null)
        {
            $user_id = $_GET['user_id'];
            $user_m->deleteUser($user_id);
            header("location:userAdmin_All");
        }
    }
}
?>