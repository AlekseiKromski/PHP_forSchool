<?php

session_start();

class Login
{
    protected $login;
    protected $password;

    public function __construct($login, $password,$connect){
        $this -> login  = $login;
        $this -> password = $this->hashPassword($password); //хэшируем данные;
        if($this -> checkAuth($this->login, $this->password,$connect)){
            header('Location: ../index.php');
        }else{
            header('Location: ../login.php?auth=false');
        }
    }

    protected function hashPassword($password){
        $secret = "MXrE7tqpaU2wVPPC"; // соль
        $password = md5($password.$secret);
        return $password;
    }

    protected function checkAuth($login, $password,$connect){
        $query = mysqli_query($connect, "SELECT * FROM users WHERE login = '$login' AND password = '$password'");
        if($query->num_rows != 0){
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            $user_query = mysqli_fetch_assoc($query);
            $_SESSION['id'] = $user_query['id'];
            $_SESSION['rule'] = $user_query['rule'];
            return true;
        }else{
            return false;
        }
    }


}