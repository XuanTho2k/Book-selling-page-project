<?php
require_once "header.php";
require_once "footer.php";

class Home extends MainController
{
    public function index()
    {
        $data['page_title'] = 'Home';
        //load model
        $header = new Header();

        $cate = $this->loadModel('categoriesModel');
        $book = $this->loadModel('bookModel');
        $publisher = $this->loadModel('publisherModel');
        //get data for category
        $data['cate_all'] = $cate->getCategories();
        $data['cate'] = $cate->getCategories(3);
        $data['cate_one'] = $cate->getCategoriesById(3);
        //get data for book
        $data['book_most_view']=$book->getBookMostView(2); 
        $data['book_all']=$book->getAllBook();
        $data['price']=$book->getBookPrice(1);
        $data['book_model'] = $book;
        $data['book_recent'] = $book->getBookRecent();
        //get data for publisher
        $data['publisher_all'] = $publisher->getAllPublishers();
        
        //rendering view
        $this->view("index", $data);
        $footer = new Footer();
    }
}
