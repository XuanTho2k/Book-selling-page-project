<?php
class Category
{
    private $id;
    private $name;
    private $description;
    private $img;
    private $capacity;
    private $count;
    public function __construct($id, $name, $description, $img, $capacity, $count)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->img = $img;
        $this->capacity = $capacity;
        $this->count = $count;
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
        $this->id = $name;
    }
    public function getDes()
    {
        return $this->description;
    }
    public function setDes($des)
    {
        $this->id = $des;
    }
    public function getImg()
    {
        return $this->img;
    }
    public function setImg($img)
    {
        $this->id = $img;
    }
    public function getCapacity()
    {
        return $this->capacity;
    }
    public function setCapacity($capacity)
    {
        $this->id = $capacity;
    }
    public function getCount()
    {
        return $this->count;
    }
    public function setCount($count)
    {
        $this->id = $count;
    }
}
