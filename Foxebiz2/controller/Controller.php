<?php


class Controller
{
    public static function StartSite(){
        $array = Category::getAllCategory();
        $arrayData = News::getTopNews();
        include_once 'view/start.php';
    }

    public static function AllCategory(){
        $arr = Category::getAllCategory();
        include_once 'view/start.php';
    }

    public static function error404(){
        include_once 'view/error404.php';
    }

    public static function News($category){
        $array = Category::getAllCategory();
        $arrayData = News::getAllNews($category);
        include_once 'view/news.php';
    }

    public static function Search($data){
        $array = Category::getAllCategory();
        $arrayData = Search::searchResult($data);
        include_once 'view/search.php';
    }

    public static function Contact(){
        $array = Category::getAllCategory();
        include_once 'view/contact.php';
    }

    public static function NewsSingle($id){
        $array = Category::getAllCategoryPlus();
        $arrayData = News::getNew($id);
        $arrayData2 = News::getLastNews();
        $arrayData3 = News::getComments($id);
        include_once 'view/singleNews.php';
    }

}