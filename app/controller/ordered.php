<?php
require_once "header.php";
require_once "footer.php";
class Ordered extends MainController
{
    public function index()
    {
        $bill_m = $this->loadModel('billModel');
        $user_m = $this->loadModel('userModel');

        
        if (isset($_POST['user_name']))
        {    


            $datas = $_POST;
            
             $bill_id =  $bill_m->addBill($datas);
            echo $bill_id;

            foreach( $_SESSION['carts'] as $index => $book){
                $data['book_id'] = $book['id'];
                $data['bill_id'] = $bill_id;
                $bill_m->addBookBill($data);
            }
        }

        $h = new Header();
        $this->view('ordered');
        $f = new Footer();
    }
}
?>