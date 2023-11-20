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
}
?>

