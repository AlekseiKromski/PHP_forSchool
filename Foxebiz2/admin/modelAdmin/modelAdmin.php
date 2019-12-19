<?php


class modelAdmin
{
    public static function userAuth(){
        if(isset($_SESSION['userId'])){
            $logIn = true;
        }else{
            $logIn = false;
            if(isset($_POST['btnlogin'])){
                if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])){
                    $email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
                    $password = $_POST['password'];
                    $query = "SELECT * FROM users WHEN email = '$email'";
                    $db = new Database();
                    $item=$db->getAll();
                    if($item != null){
                        if(password_verify($password, $item['password'])){
                            $_SESSION['userId'] = $item['id'];
                            $_SESSION['username'] = $item['username'];
                            $_SESSION['sessionId'] = session_id();
                            $logIn = true;
                        }
                    }
                }
            }
        }

        return $logIn;
    }

    public static function userLogout(){

    }

}