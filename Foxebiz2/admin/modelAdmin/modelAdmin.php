<?php


class modelAdmin
{
    public static function userAuth(){
        if(isset($_SESSION['userId'])){
            $logIn = true;
        }else{
            $logIn = false;
        }

        return $logIn;
    }

    public static function userLogout(){

    }

}