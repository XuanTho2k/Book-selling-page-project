<?php
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class UpdateCate extends MainController
{
    public function index()
    {
        //load model
        $cate_m = $this->loadModel('categoriesModel');
        
        if(isset($_GET['cate_id']) && $_GET['cate_id'] != null){
            $cate_update_id = $_GET['cate_id'];
            $data['cate_update'] = $cate_m->getCategoriesById($cate_update_id);

        } else {
            $data['cate_update'] = null;
        }
        
        if(isset($_POST['update_cate'])){
            $cate_m->updateCategory($_POST);
            header("Location:categoryAdmin_All");
        }

        $h = new HeaderAdmin();
        $this->view('updateCate',$data);
        $f = new FooterAdmin();

       
    }
}

?>