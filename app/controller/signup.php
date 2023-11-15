<?php 
class Signup extends MainController
{
    public function index()
    {
        $data['page_title'] = 'Sign Up';
        if (isset($_POST['email']))
        {
            $user = $this->loadModel('user');
            $user->signUp($_POST);
        }


        
        $this->view('signup',$data);
    }
}
?>