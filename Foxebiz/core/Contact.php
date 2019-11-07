<?php


class Contact
{

    public static function sendContact($connect,$data)
    {
        if(empty($data['name']) or empty($data['email']) or empty($data['phone']) or empty($data['text'])){
            return 'no_data';
        }else{
            $name = $data['name'];
            $email = $data['email'];
            $phone = $data['phone'];
            $text = $data['text'];
            $date = date('Y-m-d');
            mysqli_query($connect,"INSERT INTO `contact` VALUES (null,'$name','$email','$phone','$text', '$date')");
        }
    }

    public static function redirect(){
        header("Location: ../contact.php");
    }


}