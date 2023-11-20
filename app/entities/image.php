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
?>