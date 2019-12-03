<?php


class News
{

    public static function getTopNews(){
        $query = "SELECT news.*, users.login FROM news JOIN users ON `users`.`id` = news.user LIMIT 8";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getAllNews($category){
        if($category == 'All'){
            $query = "SELECT news.*, users.login, category.name AS category_name FROM news JOIN users ON `users`.`id` = news.user JOIN category ON category.id = news.category";
        }else{
            $query = "SELECT news.*, users.login, category.name AS category_name FROM news JOIN users ON `users`.`id` = news.user JOIN category ON category.id = news.category WHERE category.name = '$category'";
        }
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }
}