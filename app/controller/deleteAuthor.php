<?php 
class DeleteAuthor extends MainController
{
    public function index()
    {
        $author_m = $this->loadModel('authorModel');

        if (isset($_GET['author_id']) && !empty($_GET['author_id']))
        {
            $author_m->deleteAuthor($_GET['author_id']);
            header("location:authorController");
        }
    }
}
?>