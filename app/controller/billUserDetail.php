<?php
require_once "header.php";
require_once "footer.php";
class BillUserDetail extends MainController
{
    public function index()
    {
        $book_m = $this->loadModel('bookModel');
        if(isset($_GET['bill_id']) && !empty($_GET['bill_id']))
        {
            $bill_id = $_GET['bill_id'];
            $data['book_by_bill'] = $book_m->getBookByBill($bill_id);
        }

        $h = new Header();
        $this->view('billuserdetail',$data);
        $f = new Footer();
    }
}
?>