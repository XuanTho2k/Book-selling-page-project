<?php
class Header extends MainController
{
   public function __construct()
   {
      $cate = $this->loadModel('categoriesModel');
      $data['header_cate'] = $cate->getParentCategory();
      $data['cate_model'] = $cate;
      $this->view('header', $data);
   }

}
?>