<?php
class DeleteProduct extends MainController
{
    public function index()
    {
        $book_m = $this->loadModel('bookModel');
        if (isset($_GET['book_id']) && !empty($_GET['book_id'])) {
            $book_id = $_GET['book_id'];
            $book_m->deleteBook($book_id);
            header("location:productAdmin_All");
        } else {
            echo "Book not found";
        }
    }
}
