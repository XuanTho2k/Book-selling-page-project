<?php 
require_once("header.php");
require_once("footer.php");
class Cart extends MainController
{
    public function index()
    {
        $header = new Header();

        if(!isset($_SESSION['carts'])){
            $_SESSION['carts'] = array();
        }
        //load model
        $shipper = $this->loadModel('shipperModel');
        
        $cart = $this->loadModel('cartModel');
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-add-to-cart'])) 
        {   
            $book = array (
                'id' => $_POST['id'],
                'name' => $_POST['book-name'],
                'price' => $_POST['price'],
                'img' => $_POST['img'],
            );
            $cart->addToCart($book);
            
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-del-one-cart'])){
            $cart->delOneCart($_POST['index']);
        }
        
        $data['shipper_all'] = $shipper->getAllShipper();
        $data['page_title'] = 'Cart';
        $this->view('cart',$data);
        $footer = new Footer();
    }
}

?>