<?php
class Category
{
    private $id;
    private $name;
    private $description;
    private $img;
    private $capacity;
    private $count;
    private $parent_cate_id;
    public function __construct($id, $name, $description, $img, $capacity, $count, $parent_cate_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->img = $img;
        $this->capacity = $capacity;
        $this->count = $count;
        $this->parent_cate_id = $parent_cate_id;
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
        $this->id = $name;
    }
    public function getDes()
    {
        return $this->description;
    }
    public function setDes($des)
    {
        $this->id = $des;
    }
    public function getImg()
    {
        return $this->img;
    }
    public function setImg($img)
    {
        $this->id = $img;
    }
    public function getCapacity()
    {
        return $this->capacity;
    }
    public function setCapacity($capacity)
    {
        $this->id = $capacity;
    }
    public function getCount()
    {
        return $this->count;
    }
    public function setCount($count)
    {
        $this->id = $count;
    }
    public function getParentCateId()
    {
        return $this->parent_cate_id;
    }
    public function setParentCateId($id)
    {
        $this->parent_cate_id = $id;
    }
}

class CategoriesModel
{
    public function getCategories($cates = null)
    {
        $db = new Database();
        $categories = array();

        $query = "SELECT * from categories where 1 ";
        if ($cates != null) {
            $query .= "LIMIT " . $cates;
        }
        $data = $db->read($query);
        $data = json_decode(json_encode($data), true);

        foreach ($data as $row) {
            $category = new Category(
                $row['cate_id'],
                $row['cate_name'],
                $row['cate_des'],
                $row['cate_img'],
                $row['cate_capacity'],
                $row['cate_open'],
                $row['parent_cate_id']
            );
            $categories[] = $category;
        }

        return $categories;
    }
    public function getCategoriesById($id)
    {
        $db = new Database();

        $query = "select * from categories where cate_id = :id";
        $arr['id'] = $id;
        $data = $db->read($query, $arr);
        $data = json_decode(json_encode($data), true);
        $category = new Category(
            $data[0]['cate_id'],
            $data[0]['cate_name'],
            $data[0]['cate_des'],
            $data[0]['cate_img'],
            $data[0]['cate_capacity'],
            $data[0]['cate_open'],
            $data[0]['parent_cate_id']
        );

        return $category;
    }
    public function countCategory($id)
    {
        $db = new Database();
        $query = "select * from categories where id = :id";
        $arr['id'] = $id;
        $db->read($query, $arr);
    }
    public function getParentCategory()
    {
        $db = new Database();
        $query = "select * from categories where parent_cate_id IS NULL";

        $data = $db->read($query);
        $data = json_decode(json_encode($data), true);
        $categories = array();
        foreach ($data as $row) {
            $category = new Category(
                $row['cate_id'],
                $row['cate_name'],
                $row['cate_des'],
                $row['cate_img'],
                $row['cate_capacity'],
                $row['cate_open'],
                $row['parent_cate_id']

            );
            $categories[] = $category;
        }
        return $categories;
    }
    public function getChildCategory($parent_id)
    {
        $db = new Database();
        $query = "select b.* from categories as a left join categories as b on a.cate_id = b.parent_cate_id where b.parent_cate_id = :id";
        $arr['id'] = $parent_id;
        $data = $db->read($query,$arr);
        $data = json_decode(json_encode($data), true);
        $child_categories = array();
        if ($data != null) {
        foreach($data as $row){
            $category = new Category(
                $row['cate_id'],
                $row['cate_name'],
                $row['cate_des'],
                $row['cate_img'],
                $row['cate_capacity'],
                $row['cate_open'],
                $row['parent_cate_id']

            );
            $child_categories[] = $category; 
        }
        } else {
            return null;
        }
        return $child_categories;
    }
    public function getCategoryByBookId($book_id)
    {
        $db = new Database();
        $query = "select c.* from book as a join book_cate as b on a.book_id = b.book_id join categories as c on b.cate_id = c.cate_id where a.book_id = :book_id";
        $arr['book_id'] = $book_id;
        $data = $db->read($query,$arr);
        $data = json_decode(json_encode($data),true);
        $categories = array();
        foreach ($data as $row){
            $cate = new Category(
                $row['cate_id'],
                $row['cate_name'],
                $row['cate_des'],
                $row['cate_img'],
                $row['cate_capacity'],
                $row['cate_open'],
                $row['parent_cate_id']
            ); 
            $categories[] = $cate;
        }
        return $categories;
    }


}
