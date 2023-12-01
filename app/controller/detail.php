<?php 
require_once("header.php");
require_once("footer.php");
class Detail extends MainController
{
    public function index()
    {
        $header = new Header();
        //load model
        $book = $this->loadModel("bookModel");
        $image = $this->loadModel("imageModel");
        $author = $this->loadModel("authorModel");
        $publisher = $this->loadModel("publisherModel");
        $cate = $this->loadModel("categoriesModel");
        $cmt_m = $this->loadModel('commentModel');
        $user_m = $this->loadModel('userModel');

        //get data
        if (!isset($_GET['book_id'])){
            $_GET['book_id'] = 1;
        }
        $data['book_by_id'] = $book->getBookDetails($_GET['book_id']);
        $data['img_by_book_id'] = $image->getImagesByBookId($_GET['book_id'],3);
        $data['author'] = $author->getAuthorById($data['book_by_id']->getAuthor());
        $data['publisher'] = $publisher->getPublisherById($data['book_by_id']->getPublisher());
        $data['cate_by_book_id'] = $cate->getCategoryByBookId($data['book_by_id']->getId());
        //$data['book_by_author_id'] = $book->getBookByAuthor($data['author']->getId());
        $data['book_by_cate_id'] = $book->getBookByCate($data['cate_by_book_id'][0]->getId(),$data['book_by_id']->getId());
        $data['page_title'] = 'Product Details';
        $data['user_m'] = $user_m;
        $data['cmt_by_book_id'] = $cmt_m->getCmtByBookId($_GET['book_id']);

        if (isset($_POST['cmt_text']) && !empty($_POST['cmt_text']))
        {   
            $cmt_m->addCmt($_POST);
        }
        
        //render view
        $this->view('detail',$data);
        $footer = new Footer();
    }
}
?>