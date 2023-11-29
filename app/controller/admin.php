<?php 
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class Admin extends MainController 
{
    public function index ()
    {
        // load model
        $bill = $this->loadModel('billModel');
        $cmt_M = $this->loadModel('commentModel');
        $book_M = $this->loadModel('bookModel');

        $data['bill_count'] = $bill->countAllBill();
        $data['bill_total'] = $bill->countAllSale();
        $data['all_cmts'] = $cmt_M->countAllCmt();
        $data['all_books'] = $book_M->countAllBook();
        
        $header = new HeaderAdmin() ;
        $this->view('admindashboard',$data);
        $footer = new FooterAdmin();

        
    }
    
}
?>