<?php
class Header extends MainController
{
   public function __construct()
   {
      $cate = $this->loadModel('categoriesModel');
      if (!isset($_SESSION['carts'])) {
         $_SESSION['carts'] = array();
      } else {
         $data['cart_num'] = count($_SESSION['carts']);
      }
      $data['cart_num'] = 0;
      $data['header_cate'] = $cate->getParentCategory();
      $data['cate_model'] = $cate;
      $this->view('header', $data);
   }
}
