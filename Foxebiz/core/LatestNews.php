<?php


class LatestNews
{

    protected $arr;

    public function __construct($connect)
    {
        $query = mysqli_query($connect,"SELECT id,name FROM news ORDER BY id DESC LIMIT 3");
        $arr = [];
        while ($result = mysqli_fetch_assoc($query)){
            $arr[] = $result;
        }
        $this->arr = $arr;
    }
    public function getArrLatestNews(){
        return $this->arr;
    }
}