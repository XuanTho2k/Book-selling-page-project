<?php
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class DeleteCmt extends MainController
{
    public function index()
    {
        //load model
       
        $cmt_m = $this->loadModel('commentModel');

        if(isset($_GET['cmt_id']) && !empty($_GET['cmt_id']))
        {
            $cmt_m->deleteCmt($_GET['cmt_id']);
            header("Location:cmtAdmin");
        }

        
    }
}
