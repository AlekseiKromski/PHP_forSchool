<?php


class controllerAdmin
{

    public static function formLoginSite(){
        include_once 'viewAdmin/formlogin.php';
    }

    public static function error404(){
        include_once 'viewAdmin/error404.php';
    }

    public static function loginAction(){
        $logIn = false;
        $logIn = modelAdmin::userAuth();
        if($logIn == true){
            include_once 'viewAdmin/startAdmin.php';
        }else{
            $_SESSION['errorString'] = 'Неправельная почта или пароль';
            include_once 'viewAdmin/formlogin.php';
        }
    }

    public static function logoutAction(){
        modelAdmin::userLogout();
        include_once 'viewAdmin/formlogin.php';
    }

    public static function registerForm(){
        include_once("viewAdmin/formRegister.php");
    }

    public static function registerUser(){
        $result = modelRegister::registerUser();
        include_once('viewAdmin/answerRegister.php');
    }

}