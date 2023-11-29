<?php
class Shipper
{
    private $id;
    private $name;
    private $price;
    private $logo;
    public function __construct($id, $name, $price, $logo)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->logo = $logo;
    }
    public function getId()
    {
        return  $this->id;
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
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getImg()
    {
        return $this->logo;
    }
    public function setImg($logo)
    {
        $this->logo = $logo;
    }
}
class ShipperModel
{
    public function getAllShipper()
    {
        $db = new Database();
        $query = "select * from shipper";
        $data = $db->read($query);
        $data = json_decode(json_encode($data), true);
        $shippers = array();
        foreach ($data as $row) {
            $shipper = new Shipper(
                $row["shipper_id"],
                $row["shipper_name"],
                $row["shipper_price"],
                $row["shipper_logo"]

            );
            $shippers[] = $shipper;
        }
        return $shippers;
    }
    public function addNewShipper($data)
    {
        $db = new Database();
        if ($_FILES['img']['error'] != 4) {
            $query = "INSERT INTO `shipper`( `shipper_name`, `shipper_logo`,`shipper_price`) VALUES (:name,:img,:price)";
            $data['img'] = $_FILES['img']['name'];
            $tmp_type = $_FILES['img']['type'];

            move_uploaded_file($tmp_type, ASSETS . "bookstore/img/" . $data['img']);
        } else {
            $query = "INSERT INTO `shipper`( `shipper_name`,`shipper_price`) VALUES (:name, :price)";
        }
        $db->write($query, $data);
    }
    public function deleteShipper($id)
    {
        $db = new Database();
        $query = "DELETE FROM shipper where shipper_id = :id";
        $arr['id'] = $id;
        $db->write($query, $arr);
    }
    public function updateShipper($data)
    {
        $db = new Database();
        if ($_FILES['img']['error'] != 4) {
            $query = "Update shipper set shipper_name = :name, shipper_logo= :img, shipper_price = :price where shipper_id = :hidden_id";
            $data['img'] = $_FILES['img']['name'];
            $tmp_type = $_FILES['img']['type'];

            move_uploaded_file($tmp_type, ASSETS . "bookstore/img/" . $data['img']);
        } else {
            $query = "Update shipper set shipper_name = :name, shipper_price = :price where shipper_id = :hidden_id";
        }
        $db->write($query, $data);
    }
    public function getShipperById($id)
    {
        $db = new Database();
        $query = "select * from shipper where shipper_id = :id";
        $arr['id'] = $id;
        $data = $db->read($query, $arr);
        $data = json_decode(json_encode($data), true);
        foreach ($data as $row) {
            $shipper = new Shipper(
                $row["shipper_id"],
                $row["shipper_name"],
                $row["shipper_price"],
                $row["shipper_logo"]

            );
        }
        return $shipper;
    }
}
