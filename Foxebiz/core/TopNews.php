<?php


class TopNews
{

    protected $arr;

    public function __construct($connect)
    {
        $query = mysqli_query($connect,"SELECT * FROM news ORDER BY id DESC LIMIT 8");
        $arr = [];
        while ($result = mysqli_fetch_assoc($query)){
            $arr[] = $result;
        }
        $this->arr = $arr;
    }

    public function getArrTopNews(){
        return $this->arr;
    }
}