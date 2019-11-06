<?php


class Search
{
    protected $arr;

    public function __construct($connect,$data)
    {
        $query = mysqli_query($connect,"SELECT * FROM news WHERE text LIKE '$data' OR name LIKE '$data' OR name LIKE '$data' OR date LIKE '$data' OR user LIKE '$data' OR description LIKE '$data'");
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