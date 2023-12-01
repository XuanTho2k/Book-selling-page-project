<?php 
class HeaderAdmin extends MainController
{
    public function __construct()
    {
        $data = array();
        $cate_m = $this->loadModel('categoriesModel');
        $data['cate'] = $cate_m->getCategories();
        $this->view('headerAdmin',$data);
    }
}

?>