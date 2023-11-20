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

?>