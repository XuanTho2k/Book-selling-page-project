<?php 
class Publisher 
{
    private $id;
    private $name;
    private $img;
    public function __construct($id,$name,$img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->img = $img;
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
    public function getImg()
    {
        return $this->img;
    }
    public function setImg($img)
    {
        $this->img = $img;
    }
}

class PublisherModel 
{
    public function getAllPublishers()
    {
        $db = new Database();
        $query = "select * from Publisher";
        $data = $db->read($query);
        $data = json_decode(json_encode($data),true);
        $publishers = array();
        foreach ($data as $row){
            $publish = new Publisher(
                $row["publisher_id"],
                $row["publisher_name"],
                $row["publisher_img"]
            );
            $publishers[] = $publish;
        }
        return $publishers;
    }
    public function getPublisherById($id)
    {
        $db = new Database();
        $query = "select * from publisher where publisher_id = :id";
        $arr['id'] = $id;
        $data = $db->read($query,$arr);
        $data = json_decode(json_encode($data),true);
        foreach ($data as $row){
            $publisher = new Publisher(
                $row["publisher_id"],
                $row["publisher_name"],
                $row["publisher_img"]
            );
        }
        return $publisher;
    }
    public function addNewPublisher($data)
    {
        $db = new Database();
        if ($_FILES['img']['error'] != 4){
            $query = "INSERT INTO `publisher`( `publisher_name`, `publisher_img`) VALUES (:name,:img)";
            $data['img'] = $_FILES['img']['name'];
            $tmp_type = $_FILES['img']['type'];

            move_uploaded_file($tmp_type,ASSETS."bookstore/img/".$data['img']);
        } else {
            $query = "INSERT INTO `publisher`( `publisher_name`) VALUES (:name)";
        }
        $db->write($query,$data);
    }
    public function deletePublisher($id)
    {
        $db = new Database();
        $query = "DELETE FROM publisher where publisher_id = :id";
        $arr['id'] = $id;
        $db->write($query,$arr);
    }
    public function updatePublisher($data)
    {
        $db = new Database();
        if ($_FILES['img']['error'] != 4)
        {
            $query = "Update publisher set publisher_name = :name, publisher_img = :img where publisher_id = :hidden_id";
            $data['img'] = $_FILES['img']['name'];
            $tmp_type = $_FILES['img']['type'];

            move_uploaded_file($tmp_type,ASSETS."bookstore/img/".$data['img']);
        } else {
            $query = "Update publisher set publisher_name = :name where publisher_id = :hidden_id";
        }
        $db->write($query,$data);
    }
}
?>

