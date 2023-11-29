<?php
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class addCategory extends MainController
{
    public function index()
    {
        //load model
        $cate_m = $this->loadModel('categoriesModel');
        $data = array();
        $data['cate_all'] = $cate_m->getCategories();
        //
        if (isset($_POST['add_cate'])){
            var_dump($_POST);
            $cate_m->insertCategory($_POST);
            header("location:categoryAdmin_All");
        }

        $h = new HeaderAdmin();
        $this->view('addCategory',$data);
        $f = new FooterAdmin();
    }
}

?>