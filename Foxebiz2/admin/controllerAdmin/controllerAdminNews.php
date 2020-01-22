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

    public static function newsEditForm($id){
        $arr = modelAdmin::getCategoryList();
        $detail = modelAdminNews::getNewsDetail($id);
        include_once ('viewAdmin/newsEditForm.php');
    }

    public static function newsEditResult($id){
        $test = modelAdminNews::getNewsEditResult($id);
        include_once ('viewAdmin/newsEditForm.php');
    }

    public static function newsDeleteForm($id){
        $arr = modelAdmin::getCategoryList();
        $detail = modelAdminNews::getNewsDetail($id);
        include_once ('viewAdmin/newsDeleteForm.php');
    }

    public static function newsDeleteResult($id){
        $test = modelAdminNews::getNewsDelete($id);
        include_once ('viewAdmin/newsDeleteForm.php');
    }
}