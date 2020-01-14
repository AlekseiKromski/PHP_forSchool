<?php


class controllerAdminNews
{
    public static function newsAddResult(){
        $test = modelAdminNews::getNewsAdd();
        include_once("viewAdmin/newsAddForm.php");
    }

    public static function newsAddForm(){
        $arr = modelAdmin::getCategoryList();
        include_once("viewAdmin/newsAddForm.php");
    }
}