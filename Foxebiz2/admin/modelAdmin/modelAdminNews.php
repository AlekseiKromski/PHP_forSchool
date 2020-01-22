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

    public static function getNewsDetail($id){
        $query = "SELECT news.*, category.name AS categoryName,users.login FROM news, category, users WHERE news.category = category.id AND news.user = users.id AND news.id = '$id'";
        $db = new Database();
        $item = $db->getOne($query);
        return $item;
    }

    public static function getNewsEditResult($id){
        $test = false;
        if(isset($_POST['save'])){
            if(isset($_POST['title']) && isset($_POST['text']) && isset($_POST['idCategory']) ){
                $title = $_POST['title'];
                $text = $_POST['text'];
                $idCategory = $_POST['idCategory'];
                $image = $_FILES['picture']['name'];
                $desc = mb_strimwidth($text,0,30,"...");
                if($image!=""){
                    $uploaddir = '../assets/post_img/';
                    $uploadfile = $uploaddir . basename($_FILES['picture']['name']);
                    copy($_FILES['picture']['tmp_name'], $uploadfile);
                    $image = 'assets/post_img/' . $image;
                }
                if($image == ""){
                    $sql="UPDATE `news` SET `name`='$title',`text`='$text',`category`='$idCategory',`description`='$desc' WHERE id = '$id'";
                }else{
                    $sql = "UPDATE `news` SET `name`='$title',`text`='$text',`category`='$idCategory',`img`='$image',`description`='$desc' WHERE id = '$id'";
                }
                $db = new Database();
                $item = $db->setData($sql);
                if($item == true){
                    $test = true;
                }
            }
        }
        return $test;
    }

    public static function getNewsDelete($id){
        $test = false;
        if(isset($_POST['save'])){
            $sql = "DELETE FROM news WHERE news.id = '$id'";
            $db = new Database();
            $item = $db->setData($sql);
            if($item == true){
                $test == true;
            }
        }
        return $test;
    }

}