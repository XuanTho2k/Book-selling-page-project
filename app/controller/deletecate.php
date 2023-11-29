<?php
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class DeleteCate extends MainController
{
    public function index()
    {
        //load model
        $cate_m = $this->loadModel('categoriesModel');
        $data = array();
        echo $_GET['cate_id'];
        if (isset($_GET['cate_id']) && !empty($_GET['cate_id'])) {
            $cate_id = $_GET['cate_id'];
            $cate_m->deleteCategory($cate_id);
            header("location:categoryAdmin_All");
        } else {
            echo "No category";
        }
    }
}
