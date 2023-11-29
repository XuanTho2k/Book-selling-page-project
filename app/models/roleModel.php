<?php
class Role 
{
    private $id;
    private $name;
    public function __construct($id,$name)
    {
        $this->id = $id;
        $this->name = $name;
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
}
class RoleModel 
{
    public function getAllRole()
    {
        $db = new Database();
        $query = "select * from role";
        $data = $db->read($query);
        $data = json_decode(json_encode($data), true);
        $roles = array();
        foreach ($data as $row){
            $role = new Role(
                $row['role_id'],
                $row['role_name']
            );
            $roles[] = $role;
        }
        return $roles;
    }
    public function getRoleById($id)
    {
        $db = new Database();
        $query = "select * from role where role_id = :id";
        $arr['id'] = $id;
        $data = $db->read($query,$arr);
        $data = json_decode(json_encode($data), true);
        foreach ($data as $row){
            $role = new Role(
                $row['role_id'],
                $row['role_name']
            );
        } 
        return $role;
    }
}
?>