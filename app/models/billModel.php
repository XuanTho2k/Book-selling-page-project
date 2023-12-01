<?php

class Bill
{
    private $bill_id;
    private $user_id;
    private $status;
    private $total;
    private $quantity;
    private $date;
    private $add;
    private $shipper;
    private $user_name;
    private $user_tel;
    public function __construct($bill_id, $user_id, $status, $total, $quantity, $date, $add, $shipper, $user_name, $user_tel)
    {
        $this->bill_id = $bill_id;
        $this->user_id = $user_id;
        $this->status = $status;
        $this->total = $total;
        $this->quantity = $quantity;
        $this->date = $date;
        $this->add = $add;
        $this->shipper = $shipper;
        $this->user_name = $user_name;
        $this->user_tel = $user_tel;
    }
    public function getId()
    {
        return $this->bill_id;
    }
    public function setId($id)
    {
        $this->bill_id = $id;
    }
    public function getUserId()
    {
        return $this->user_id;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getTotal()
    {
        return $this->total;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function getAddr()
    {
        return $this->add;
    }
    public function getShipper()
    {
        return $this->shipper;
    }
    public function getUserName()
    {
        return $this->user_name;
    }
    public function getUserTel()
    {
        return $this->user_tel;
    }
}
class BillModel
{
    private $db;

    public function getAllBill()
    {
        $db = new Database();
        $query = "select * from bill";
        $data = $db->read($query);
        $data = json_decode(json_encode($data), true);
        $bills = array();
        foreach($data as $row){
            $bill = new Bill (
                $row['bill_id'],
                $row['bill_user_id'],
                $row['bill_status'],
                $row['bill_total'],
                $row['bill_book_quantity'],
                $row['bill_date_create'],
                $row['bill_to_address'],
                $row['bill_shipper_id'],
                $row['bill_name_recieve'],
                $row['bill_phone_recieve'],
            );
            $bills[] = $bill;
        }
        return $bills;
    }
    public function countAllBill()
    {
        $db = new Database();
        $query = "select count(bill_id) as count from bill";
        $data = $db->read($query);
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
    public function addBill($data)
    {
        $db = new Database();
        $pdo = $db->db_connect();
        $query = "INSERT INTO `bill`(`bill_user_id`, `bill_total`, `bill_book_quantity`,
        `bill_date_create`, `bill_to_address`, `bill_name_recieve`,
        `bill_phone_recieve`, `bill_shipper_id`) VALUES
        (:user_id,:total,:quantity,:date,:addr,:user_name,:user_tel,:shipper);
        select last_insert_id()";
        $stmt = $pdo->prepare($query);
        $stmt->execute($data);
        return  $pdo->lastInsertId();
    }
    public static function addBookBill($data)
    {
        $db = new Database();
        $query = "INSERT INTO `book_bill`(`book_id`, `bill_id`) VALUES (:book_id, :bill_id)";
        $db->write($query, $data);
    }
    public function getBillByUserId($userId)
    {
        $db = new Database();
        $query = "SELECT * FROM `bill` WHERE bill_user_id = :user_id";
        $arr['user_id'] = $userId;
        $data = $db->read($query,$arr);
        $data = json_decode(json_encode($data),true);
        $bills = array();
        foreach($data as $row){
            $bill = new Bill (
                $row['bill_id'],
                $row['bill_user_id'],
                $row['bill_status'],
                $row['bill_total'],
                $row['bill_book_quantity'],
                $row['bill_date_create'],
                $row['bill_to_address'],
                $row['bill_shipper_id'],
                $row['bill_name_recieve'],
                $row['bill_phone_recieve'],
            );
            $bills[] = $bill;
        }
        return $bills;
    }
    public function delBill($bill_id)
    {
        $db = new Database();
        $query = "delete from bill where bill_id = :id limit 1";
        $arr['id'] = $bill_id;
        $db->write($query,$arr);
    }
    public function getBillStatus($bill_status_id)
    {
        $db = new Database();
        $query = "SELECT b.status_name FROM bill as a join status_bill as b on a.bill_status = b.status_id where a.bill_status = :id";
        $arr['id'] = $bill_status_id;
        $data = $db->read($query,$arr);
        $data = json_decode(json_encode($data), true);
        return $data;
    }
    public function getBillById($bill_id)
    {
        $db = new Database();
        $query = "select * from bill where bill_id = :id";
        $arr['id'] = $bill_id;
        $data = $db->read($query,$arr);
        $data = json_decode(json_encode($data),true);
        foreach($data as $row){
            $bill = new Bill (
                $row['bill_id'],
                $row['bill_user_id'],
                $row['bill_status'],
                $row['bill_total'],
                $row['bill_book_quantity'],
                $row['bill_date_create'],
                $row['bill_to_address'],
                $row['bill_shipper_id'],
                $row['bill_name_recieve'],
                $row['bill_phone_recieve'],
            );
        }
        return $bill;    
    }
    public function getAllStatus()
    {
        $db = new Database();
        $query = "select * from status_bill";
        $data = $db->read($query);
        return json_decode(json_encode($data),true);
    }
    public function updateStatusBIll($data)
    {
        $db = new Database();
        $query = "update bill set bill_status = :status_id where bill_id = :hidden_id";

        $db->write($query,$data);
    }
}
