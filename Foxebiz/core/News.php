<?php


class News
{
    protected $arr;

    public function __construct($connect,$id)
    {
        if($id == 'All'){
            $query = mysqli_query($connect,"SELECT date,name,id,category,user,description FROM news");
        }else{
            $query = mysqli_query($connect,"SELECT * FROM news WHERE category = '$id'");
        }
        $arr = [];
        while ($result = mysqli_fetch_assoc($query)){
            $arr[] = $result;
        }
        $this->arr = $arr;
    }

    public function getArrNews(){
        return $this->arr;
    }
}