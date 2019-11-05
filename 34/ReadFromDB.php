<?php

require_once 'config_db.php'; //connect to database
require_once 'category.php';
require_once 'functions.php'; //for debuging array
class ReadFromDB
{

    public static function readDB($connect){
        $category = array();
        $query = mysqli_query($connect,"SELECT * FROM category");
        while($query_fetch = mysqli_fetch_assoc($query)){
            $category[] = new category($query_fetch['id'],$query_fetch['name'],$query_fetch['description']);
        }
        return $category;
    }

    public static function createMenu($connect){
        //создание меню
        $category = self::readDB($connect);
        echo "<ul class=\"list-group col-md-4 p-0\" style=\"float: left;\">";
            foreach ($category as $c){
                echo "<li class=\"list-group-item\"><a href='index.php?category={$c->getId()}'>{$c->getName()}</a></li>";
            }

        echo "</ul>";
    }

}