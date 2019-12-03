<?php


class Search
{


    public static function searchResult($data){
        $query = "SELECT *, users.login, category.name as category_name FROM news JOIN users ON users.id = news.user JOIN category ON category.id = news.category WHERE text LIKE '%$data%' OR news.name LIKE '%$data%' OR login LIKE '%$data%' OR description LIKE '%$data%' OR category.name LIKE '%$data%'";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }
}