<?php


class modelRegister
{
    public static function registerUser(){
        $controll = array(0=>false,1=>'error');
        if(isset($_POST['save'])){
            $errorString = "";
            $name = $_POST['name'];
            $email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
            if(!$email){
                $errorString.="Неверный email <br/>";
            }
            $password = $_POST['password'];
            $confim = $_POST['confim'];
            if(!$password || !$confim || mb_strlen($password) <= 6){
                $errorString .= "Пароль должен был больше 6 символов <br>";
            }
            if($password != $confim){
                $errorString.="Пароли не совпадают <br>";
            }
            if(mb_strlen($errorString) == 0){
                $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users`(`password`, `rule`, `email`, `username`, `login`) VALUES ('$passwordHash','user','$email','$name','$name')";
                $db = new Database();
                $item = $db->setData($sql);
                if($item){
                    $controll=array(0=>true);
                }else{
                    $controll=array(0=>false, 1=>'error write to databse');
                }
            }else{
                $controll=array(0=>false, 1=>$errorString);
            }

        }
        return $controll;
    }
}