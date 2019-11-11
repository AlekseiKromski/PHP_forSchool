<?php


class Search
{
    protected $arr;

    public function __construct($connect,$data)
    {
        $query = mysqli_query($connect,"SELECT date,name,id,category,user,description FROM news WHERE text LIKE '%$data%' OR name LIKE '%$data%' OR name LIKE '%$data%' OR user LIKE '%$data%' OR description LIKE '%$data%' OR category LIKE '%$data%'");
        $arr = [];
        while ($result = mysqli_fetch_assoc($query)){
            $arr[] = $result;
        }
        $this->arr = $arr;
    }

    public function getArrSearch(){
        return $this->arr;
    }

}