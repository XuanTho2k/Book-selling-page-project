<?php 
class Author 
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
class AuthorModel 
{
    public function getAuthorById($id)
    {
        $db = new Database();
        $query  = "select * from author where author_id = :id";
        $arr['id'] = $id;
        $data = $db->read($query, $arr);
        $data = json_decode(json_encode($data), true);
        foreach ($data as $row){
            $author = new Author(
                $row["author_id"],
                $row["author_name"]
            );
        }
        return $author;
    }
    public function getAllAuthor()
    {
        $db = new Database();
        $query = "select * from author";
        $data=$db->read($query);
        $data= json_decode(json_encode($data),true);
        $authors = array();
        foreach($data as $row){
            $author = new Author(
                $row["author_id"],
                $row["author_name"]
            );
            $authors[] = $author;
        }
        return $authors;
    }
}

?>