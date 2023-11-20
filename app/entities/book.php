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
    private function getId()
    {
        return $this->id;
    }
    private function setId($id)
    {
        $this->id = $id;
    }
    private function getName()
    {
        return $this->name;
    }
    private function setName($name)
    {
        $this->name = $name;
    }
    private function getDes()
    {
        return $this->des;
    }
    private function setDes($des)
    {
        $this->des = $des;
    }
    private function getImg()
    {
        return $this->img;
    }
    private function setImg($img)
    {
        $this->img = $img;
    }
    private function getView()
    {
        return $this->view;
    }
    private function setView($view)
    {
        $this->view = $view;
    }
    private function getAuthor()
    {
        return $this->author;
    }
    private function setAuthor($author)
    {
        $this->author = $author;
    }
    private function getPrice()
    {
        return $this->price;
    }
    private function setPrice($price)
    {
        $this->price = $price;
    }
    private function getQuantity()
    {
        return $this->quantity;
    }
    private function setQuantity($quantity)
    {
        $this->quantity=$quantity;
    }
    private function getDate()
    {
        return $this->date;
    }
    private function setDate($date)
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
?>