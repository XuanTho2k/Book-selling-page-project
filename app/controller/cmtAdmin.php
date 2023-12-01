<?php
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class CmtAdmin extends MainController
{
    public function index()
    {
        $data = array();
        $cmt_m =$this->loadModel('commentModel');
        $user_m = $this->loadModel('userModel');
        $book_m =$this->loadModel('bookModel');
        $data['cmt_all'] = $cmt_m->getAllCmt();
        $data['book_m']= $book_m;
        $data['user_m'] = $user_m;

        $h = new HeaderAdmin();
        $this->view('cmtAdmin',$data);
        $f = new FooterAdmin();
    }
}
?>