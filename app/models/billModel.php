<?php

class Bill 
{

}
class BillModel 
{
    public function getAllBill()
    {
        $db = new Database();
        $query = "select * from bill";
        $data = $db->read($query);
        $data = json_decode(json_encode($data), true);

    }
    public function countAllBill()
    {
        $db = new Database();
        $query = "select count(bill_id) as count from bill";
        $data =$db->read($query);
        $data = json_decode(json_encode($data), true);
        return $data;
    }
    public function countAllSale()
    {
        $db = new Database();
        $query = "select sum(bill_total) as total from bill where 1";
        $data = $db->read($query);
        $data = json_decode(json_encode($data), true);
    return $data;
    }
}
?>