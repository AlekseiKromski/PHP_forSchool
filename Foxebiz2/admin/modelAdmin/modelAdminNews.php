<?php


class modelAdminNews
{
    public static function getNewsAdd(){
        $test = false;
        if(isset($_POST['save'])){
            if(isset($_POST['name']) && isset($_POST['text']) && isset($_POST['category'])){
                $name = $_POST['name'];
                $text = $_POST['text'];
                $category = $_POST['category'];
                $image = $_FILES['picture']['name'];
                $date = date("Y-m-d");
                $user = $_SESSION['userId'];
                $desc = mb_strimwidth($text,0,30,"...");
                if($image!=""){
                    $uploaddir = '../assets/post_img/';
                    $uploadfile = $uploaddir . basename($_FILES['picture']['name']);
                    copy($_FILES['picture']['tmp_name'], $uploadfile);
                    $image = 'assets/post_img/' . $image;

                }else {
                    $image = "none";
                }

                $query = "INSERT INTO `news`(`name`, `text`, `date`, `category`, `img`, `user`, `description`) VALUES ('$name','$text','$date','$category','$image','$user','$desc')";
                $db = new Database();
                $item = $db->setData($query);
                if($item == true){
                    $test = true;
                }
            }
        }
        return $test;

    }
}