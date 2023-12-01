<?php
require_once("header.php");
require_once("footer.php");

class Shop extends MainController
{
    public function index()
    {

        $header = new Header();
        $data['page_title'] = 'Shop';
        //load model
        $category = $this->loadModel('categoriesModel');
        $book = $this->loadModel('bookModel');
        $author =$this->loadModel('authorModel');
        $publisher = $this->loadModel('publisherModel');
        //get data from db
        $cate = $category->getCategories(3);
        if (isset($_GET['cate_id']) && $_GET['cate_id'] != null) {
            $cate_id = $_GET['cate_id'];
            $data['cate'] = $category->getCategoriesById($cate_id);
            $data['books'] = $book->getBookByCate($cate_id);
        } else if (isset($_GET['publisher_id']) && $_GET['publisher_id'] != null) {
            $publisher_id = $_GET['publisher_id'];
            $data['publisher'] =  $publisher->getPublisherById($publisher_id);
            $data['books'] = $book->getBookByPublisher($publisher_id);
        } else if (isset($_GET['author_id']) && $_GET['author_id'] != null) {
            $author_id = $_GET['author_id'];
            $data['author'] = $author->getAuthorById($author_id);
            $data['books'] = $book->getBookByAuthor($author_id);
        } else {
            $data['books'] = $book->getAllBook();
        }

        

        $data['cate_all'] = $category->getCategories();
        $data['author_all']= $author->getAllAuthor();
        $data['publisher_all'] = $publisher->getAllPublishers();
        //render view
        $this->view('shop', $data);
        $footer = new Footer();
    }
}
