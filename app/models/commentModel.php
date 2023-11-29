<?php 
class Comment
{

}
class commentModel
{
    public function countAllCmt()
    {
        $db = new Database();
        $query = "select count(cmt_id) as cmt from comment";
        $data = $db->read($query);
        $data = json_decode(json_encode($data), true);
        return $data;
    }
}
?>