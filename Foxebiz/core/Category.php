<?php


class Category
{

    public $arr_category;

    public function __construct($connect)
    {
        $query = mysqli_query($connect, "SELECT * FROM category");
        $arr = [];
        while ($result = mysqli_fetch_assoc($query)){
            $arr[] = $result;
        }
        $this->arr_category = $arr;
    }

    public function getArrCategory(){
        return $this->arr_category;
    }


}