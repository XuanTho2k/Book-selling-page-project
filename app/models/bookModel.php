<?php
class Book
{
   
    private $id;
    private $name;
    private $des;
    private $img;
    private $view;
    private $cate;
    private $date;
    private $price;
    private $author;
    private $quantity;
    private $publisher;
    public function __construct($id,$date, $name, $des, $img, $view,$price,$author,$quantity,$publisher)
    {
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
        $this->des = $des;
        $this->img = $img;
        $this->view = $view;
        $this->price = $price;
        $this->author = $author;
        $this->quantity = $quantity;
        $this->publisher = $publisher;

    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getDes()
    {
        return $this->des;
    }
    public function setDes($des)
    {
        $this->des = $des;
    }
    public function getImg()
    {
        return $this->img;
    }
    public function setImg($img)
    {
        $this->img = $img;
    }
    public function getView()
    {
        return $this->view;
    }
    public function setView($view)
    {
        $this->view = $view;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function setAuthor($author)
    {
        $this->author = $author;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setQuantity($quantity)
    {
        $this->quantity=$quantity;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getPublisher()
    {
        return $this->publisher;
    }
    public function setPublisher($pub)
    {
        $this->publisher = $pub;
    }
}
class BookModel 
{
    public function getBookMostView($num)
    {
        $db = new Database();
        
        $query = "select * from book order by book_view desc limit ".$num;
        $data = $db->read($query);
        $data = json_decode(json_encode($data), true);
        $books = array();
        foreach($data as $row) {
            $book = new Book(
                $row["book_id"],
                $row["book_date"],
                $row["book_name"],
                $row["book_des"],
                $row["book_img"],
                $row["book_view"],
                $row["book_price"],
                $row["book_author"],
                $row["book_quantity"],
                $row["book_publisher"]
            );
            $books[] = $book;
        }
        return $books;
    }
    public function getBookDetails($id)
    {
        $db = new Database();
        $query = "select * from book where book_id  = :id";
        $arr['id'] = $id;
        $data=$db->read($query,$arr);
        $data = json_decode(json_encode($data), true);
        foreach($data as $row){
            $book = new Book(
                $row["book_id"],
                $row["book_date"],
                $row["book_name"],
                $row["book_des"],
                $row["book_img"],
                $row["book_view"],
                $row["book_price"],
                $row["book_author"],
                $row["book_quantity"],
                $row["book_publisher"]
            );
        }
        return $book;
    }
    public function getAllBook()
    {
        $db = new Database();
        $query = "select * from book";
        $data=$db->read($query);
        $data = json_decode(json_encode($data), true);
        $books = array();
        foreach($data as $row){
            $book = new Book(
                $row["book_id"],
                $row["book_date"],
                $row["book_name"],
                $row["book_des"],
                $row["book_img"],
                $row["book_view"],
                $row["book_price"],
                $row["book_author"],
                $row["book_quantity"],
                $row["book_publisher"]
            );
            $books[] = $book;
        }
        return $books;
    }
    public function getBookPrice($id)
    {
        $db = new Database();
        $query = "select book_price from book where book_id = $id";
        $data=$db->read($query);
        $data=json_decode(json_encode($data), true);

        return $data[0]['book_price'];
    }
    public function getBookRecent()
    {
        $db = new Database();
        $query = "SELECT * FROM `book` order by book_date desc";
        $data=$db->read($query);
        $data=json_decode(json_encode($data),true);
        $books = array();
        foreach($data as $row){
            $book = new Book(
                $row["book_id"],
                $row["book_date"],
                $row["book_name"],
                $row["book_des"],
                $row["book_img"],
                $row["book_view"],
                $row["book_price"],
                $row["book_author"],
                $row["book_quantity"],
                $row["book_publisher"]
            );
            $books[] = $book;
        }
        return $books;
    }
    public function getBookByCate($cate_id,$book_id = null)
    {
        $db = new Database();
        $query = "select a.* from book as a left join book_cate as b on a.book_id = b.book_id  right join categories as c on b.cate_id = c.cate_id where c.cate_id = :cate_id";
        if ($book_id != null){
            $query.= " and a.book_id != :book_id";
            $arr['book_id'] = $book_id;
        }
        $arr['cate_id'] = $cate_id;
        $data = $db->read($query,$arr);
        $data=json_decode(json_encode($data),true);
        $books = array();
        foreach($data as $row){
            $book = new Book(
                $row["book_id"],
                $row["book_date"],
                $row["book_name"],
                $row["book_des"],
                $row["book_img"],
                $row["book_view"],
                $row["book_price"],
                $row["book_author"],
                $row["book_quantity"],
                $row["book_publisher"]
            );
            $books[] = $book;
        }
        return $books;
    }
    public function getBookByPublisher($id)
    {
        $db = new Database();
        $query = "select * from book where book_publisher = :id";
        $arr['id'] = $id;
        $data = $db->read($query,$arr);
        $data = json_decode(json_encode($data),true);
        $books = array();
        foreach($data as $row){
            $book = new Book(
                $row["book_id"],
                $row["book_date"],
                $row["book_name"],
                $row["book_des"],
                $row["book_img"],
                $row["book_view"],
                $row["book_price"],
                $row["book_author"],
                $row["book_quantity"],
                $row["book_publisher"]
            );
            $books[] = $book;
        }
        return $books;
    }
    public function getBookByAuthor($id)
    {
        $db = new Database();
        $query = "select * from book where book_author = :id";
        $arr['id'] = $id;
        $data = $db->read($query,$arr);
        $data = json_decode(json_encode($data),true);
        $books = array();
        foreach($data as $row){
            $book = new Book(
                $row["book_id"],
                $row["book_date"],
                $row["book_name"],
                $row["book_des"],
                $row["book_img"],
                $row["book_view"],
                $row["book_price"],
                $row["book_author"],
                $row["book_quantity"],
                $row["book_publisher"]
            );
            $books[] = $book;
        }
        return $books;
    }
}
