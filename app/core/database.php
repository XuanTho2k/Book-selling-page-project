<?php 
class Database 
{
    public function db_connect()    
    {
        try {
            $string = DB_TYPE . ":host=localhost;dbname=".DB_NAME.";";
            return new PDO($string,DB_USER,DB_PASSWORD);
        } catch(PDOException $error){
            die($error->getMessage());
        }
    }
    public function read($query,$data=[])
    {
        $db = $this->db_connect();
        $stm = $db->prepare($query);
        if(count($data) == 0){
            $stm = $db->query($query);
            $check = 0;
            if ($stm){
                $check = 1;     
            }
        } else { 
            
             $check=$stm->execute($data);
            
        }
        if($check == true){
            $data=$stm->fetchAll(PDO::FETCH_OBJ);
            if (is_array($data) && count($data)>0)
            {
               return $data;
            }
        } else {
            return false;
        }
    }

    public function write($query, $data = [])
    {
        $db = $this->db_connect();
        
        $stm = $db->prepare($query);
        if (count($data) == 0){
            $stm = $db->query($query);
            $check = 0;
            if($stm){
                $check =1;
            }
        } else {
            $check = $stm->execute($data);
        }
        if($check){
            return true;
        } else {
            return false;
        }
    }
    public function lastId()
    {
        $db = $this->db_connect();
        return $db->lastInsertId();
    }
}
?>