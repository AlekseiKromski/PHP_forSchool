<?php


class Category
{
    protected $arr;

    public function __construct($connect)
    {
        $query = mysqli_query($connect,"SELECT * FROM category ORDER BY id DESC");
        $arr = [];
        while ($result = mysqli_fetch_assoc($query)){
            $arr[] = $result;
        }
        $this->arr = $arr;
    }

    public function getArrCategory(){
        return $this->arr;
    }

    public static function deleteCategory($connect,$id){
        mysqli_query($connect,"DELETE FROM `category` WHERE `category`.`id` = '$id'");
    }


    public static function addCategory($connect,$data){
        $name = $data['name'];
        mysqli_query($connect,"INSERT INTO `category` VALUES (null,'$name')");
    }

    //system methods
    public static function redirect(){
        header('Location: ../category.php');
    }
}