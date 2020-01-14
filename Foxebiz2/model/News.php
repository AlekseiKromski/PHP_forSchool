<?php


class News
{

    public static function getTopNews(){
        $query = "SELECT news.*, users.login FROM news JOIN users ON `users`.`id` = news.user ORDER BY news.id DESC LIMIT 8";
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

    public static function getNew($id){
        $query = "SELECT news.*, users.login, category.name AS category_name FROM news JOIN users ON `users`.`id` = news.user JOIN category ON category.id = news.category WHERE news.id = '$id'";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getLastNews(){
        $query = "SELECT id, name FROM news LIMIT 3";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getComments($id){
        $query = "SELECT * FROM comments WHERE post_id = '$id'";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function setComment($id, $data){
        $name = $data['name'];
        $text = $data['text'];
        $date = date('Y-m-d');
        $query = "INSERT INTO `comments` (`id`, `name`, `text`, `date`, `post_id`) VALUES (NULL, '$name', '$text', '$date', '$id')";
        $db = new Database();
        $arr = $db->setData($query);
        return $arr;
    }
}