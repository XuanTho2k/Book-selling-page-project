<?php
require_once "header.php";
require_once "footer.php";
class billUserDelete extends MainController
{
    public function index()
    {
        $data = array();
        $bill_m = $this->loadModel('billModel');
        if(isset($_GET['bill_id']) && !empty($_GET['bill_id']))
        {
            $bill_id = $_GET['bill_id'];
            $bill_m->delBill($bill_id);
            header("location:billuser");
        }

        $h = new Header();
        $this->view('billuserdetail',$data);
        $f = new Footer();
    }
}
?>