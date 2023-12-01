<?php 
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class updateBillStatus extends MainController 
{
    public function index ()
    {
        // load model
        $bill = $this->loadModel('billModel');
        $cmt_M = $this->loadModel('commentModel');
        $book_M = $this->loadModel('bookModel');

        if (isset($_GET['bill_id']) && !empty($_GET['bill_id']))
        {
            $bill_id = $_GET['bill_id'];
            $data['bill'] = $bill->getBillById($bill_id);
        }

        $data['status'] = $bill->getAllStatus();
        var_dump($data['status']);
        
        if (isset($_POST['status_id']) && !empty($_POST['status_id']))
        {
            $bill->updateStatusBIll($_POST);
            header("Location:admin");
        }
        $header = new HeaderAdmin() ;
        $this->view('updateBillStatus',$data);
        $footer = new FooterAdmin();

    }
    
}
?>