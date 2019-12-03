<?php


class Category
{

    public static function getAllCategory(){
        $query = "SELECT * FROM category";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getAllCategoryPlus(){
        $query = "SELECT category.name, COUNT(*) AS num_q FROM category, news WHERE news.category = category.id GROUP BY category.name";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }
}