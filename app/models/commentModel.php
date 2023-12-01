<?php
class Comment
{
    private $id;
    private $text;
    private $user_id;
    private $book_id;
    private $date;

    public function __construct($id, $text,  $book,$user_id, $date)
    {
        $this->id = $id;
        $this->text = $text;
        $this->user_id = $user_id;
        $this->book_id = $book;
        $this->date = $date;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getText()
    {
        return $this->text;
    }
    public function getUserId()
    {
        return $this->user_id;
    }
    public function getBookId()
    {
        return $this->book_id;
    }
    public function getDate()
    {
        return $this->date;
    }
}
class commentModel
{
    public function countAllCmt()
    {
        $db = new Database();
        $query = "select count(cmt_id) as cmt from comment";
        $data = $db->read($query);
        $data = json_decode(json_encode($data), true);
        return $data;
    }
    public function getCmtByBookId($bookId)
    {
        $db = new Database();
        $query = "select * from comment where cmt_book_id = :id";
        $arr['id'] = $bookId;
        $data = $db->read($query, $arr);
        $data = json_decode(json_encode($data), true);
        $cmts = array();
        foreach ($data as $row) {
            $cmt = new Comment(
                $row['cmt_id'],
                $row['cmt_text'],
                $row['cmt_book_id'],
                $row['cmt_user_id'],
                $row['cmt_date']
            );
            $cmts[] = $cmt;
        }
        return $cmts;
    }
    public function addCmt($data)
    {
        $db = new Database();
        $query = "INSERT INTO `comment`(`cmt_text`, `cmt_book_id`, `cmt_user_id`,
`cmt_date`) VALUES (:cmt_text,:cmt_book_id,:cmt_user_id,:cmt_date)";
        $db->write($query, $data);
    }
    public function getAllCmt()
    {
        $db = new Database();
        $query = "select * from comment";
        $data = $db->read($query);
        $data = json_decode(json_encode($data), true);
        $cmts = array();
        foreach ($data as $row) {
            $cmt = new Comment(
                $row['cmt_id'],
                $row['cmt_text'],
                $row['cmt_book_id'],
                $row['cmt_user_id'],
                $row['cmt_date']
            );
            $cmts[] = $cmt;
        }
        return $cmts; 
    }
    public function deleteCmt($cmt_id)
    {
        $db = new Database();
        $query = "delete from comment where cmt_id = :id";
        $arr['id'] = $cmt_id;
        $db->write($query, $arr);
    }
}
