<?php


class News
{

    public static function getTopNews(){
        $query = "SELECT * FROM news LIMIT 8";
        $db = new Database();
        $arr = $db->getAll($query);
        $db->disconnect();
        return $arr;
    }

    public static function getAllNews($category){
        if($category == 'All'){
            $query = "SELECT * FROM news";
        }else{
            $query = "SELECT * FROM news WHERE category = '$category'";
        }
        $db = new Database();
        $arr = $db->getAll($query);
        $db->disconnect();
        return $arr;
    }
}