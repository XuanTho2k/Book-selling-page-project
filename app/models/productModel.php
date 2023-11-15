<?php

class Product
{
    private $id;
    private $name;
    private $des;
    private $img;
    private $price;
    private $cate;
    public function __construct($id, $name, $des, $img, $price, $cate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->des = $des;
        $this->img = $img;
        $this->price = $price;
        $this->cate = $cate;
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
    private function getPrice()
    {
        return $this->price;
    }
    private function setPrice($price)
    {
        $this->price = $price;
    }
    private function getCate()
    {
        return $this->cate;
    }
    private function setCate($cate)
    {
        $this->cate = $cate;
    }
}
