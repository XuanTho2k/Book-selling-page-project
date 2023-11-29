<?php
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class CategoryAdmin_All extends MainController
{
    public function index()
    {
        //load model
        $cate_m = $this->loadModel('categoriesModel');
        $data['cate_all']  = $cate_m->getCategories();

        $h = new HeaderAdmin();
        $this->view('categoryAdmin_All',$data);
        $f = new FooterAdmin();
    }
}

?>