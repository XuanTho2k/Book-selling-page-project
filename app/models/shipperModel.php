<?php 
class Shipper 
{
    private $id;
    private $name;
    private $price;
    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
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
}
class ShipperModel 
{
    public function getAllShipper()
    {
        $db=new Database();
        $query = "select * from shipper";
        $data = $db->read($query);
        $data=json_decode(json_encode($data),true);
        $shippers = array();
        foreach ($data as $row){
            $shipper = new Shipper(
                $row["shipper_id"],
                $row["shipper_name"],
                $row["shipper_price"]
            );
            $shippers[] = $shipper;
        }
        return $shippers;
    }
}
?>