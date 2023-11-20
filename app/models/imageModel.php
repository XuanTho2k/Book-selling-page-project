<?php 
class Image 
{
    private $id;
    private $img;
    private $date;
    public function __construct($id,$img,$date)
    {
        $this->id = $id;
        $this->img = $img;
        $this->date = $date;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getImg()
    {
        return $this->img;
    }
    public function setImg($img)
    {
        $this->img = $img;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
}

class ImageModel 
{
    public function getImagesByBookId($bookId, $num)
    {
        $db=new Database();
        $query = "select c.* from book as a join book_image as b on a.book_id = b.book_id join image as c on b.img_id = c.img_id where a.book_id = :book_id limit ".$num;
        $arr['book_id'] = $bookId;
        $data=$db->read($query,$arr);
        $data = json_decode(json_encode($data),true);
        $images = array();
        foreach($data as $row){
            $img = new Image(
                $row["img_id"],
                $row["img_text"],
                $row["img_date_create"]
            );
            $images[] = $img;
        }
        return $images;
    }
}
?>