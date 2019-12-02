<?php


class Search
{


    public static function searchResult($data){
        $query = "SELECT * FROM news WHERE text LIKE '%$data%' OR name LIKE '%$data%' OR name LIKE '%$data%' OR user LIKE '%$data%' OR description LIKE '%$data%' OR category LIKE '%$data%'";
        $db = new Database();
        $arr = $db->getAll($query);
        $db->disconnect();
        return $arr;
    }
}