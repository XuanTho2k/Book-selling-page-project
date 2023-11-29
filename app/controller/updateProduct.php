<?php
require_once "headerAdmin.php";
require_once "footerAdmin.php";
class updateProduct extends MainController
{
    public function index()
    {
        //load Model
        $book_m = $this->loadModel('bookModel');
        $author_m = $this->loadModel('authorModel');
        $publisher_m = $this->loadModel('publisherModel');

        $data['author_all'] = $author_m->getAllAuthor();
        $data['publisher_all'] = $publisher_m->getAllPublishers();
        $data['author_m'] = $author_m;
        $data['publisher_m'] = $publisher_m;
        if(isset($_GET['book_id']) && !empty($_GET['book_id']))
        {
            $book_id = $_GET['book_id'];
            $data['book'] = $book_m->getBookDetails($book_id);
        }
        if(isset($_POST['name']))
        {
            $book_m->updateBook($_POST);
            
            header("location:productAdmin_All");
        }

        $h = new HeaderAdmin();
        $this->view('updateProduct', $data);
        $f = new FooterAdmin();

        
        
    }
}
?>