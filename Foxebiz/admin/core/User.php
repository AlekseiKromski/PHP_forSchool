<?php


class User
{
    protected $arr;

    public function __construct($connect)
    {
        $query = mysqli_query($connect,"SELECT * FROM users");
        $arr = [];
        while ($result = mysqli_fetch_assoc($query)){
            $arr[] = $result;
        }
        $this->arr = $arr;
    }

    public function getArrUsers(){
        return $this->arr;
    }

    public static function deleteUser($connect,$id){
        mysqli_query($connect,"DELETE FROM `users` WHERE `users`.`id` = '$id'");
    }

    public static function addUser($connect,$data){
        $login = $data['login'];
        $password = $data['password'];
        $rule = $data['rule'];
        $password = self::hashPassword($password);
        mysqli_query($connect,"INSERT INTO `users` VALUES (null,'$login','$password','$rule')");
    }

    public static function redirect(){
        header('Location: ../users.php');
    }

    protected function hashPassword($password){
        $secret = "MXrE7tqpaU2wVPPC"; // соль
        $password = md5($password.$secret);
        return $password;
    }

}