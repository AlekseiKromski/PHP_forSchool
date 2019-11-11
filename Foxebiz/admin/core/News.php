<?php


class News
{
    protected $arr;

    public function __construct($connect,$user,$rule)
    {
        if($rule == 'admin'){
            $query = mysqli_query($connect,"SELECT * FROM news ORDER BY id DESC");
            $arr = [];
            while ($result = mysqli_fetch_assoc($query)){
                $arr[] = $result;
            }
            $this->arr = $arr;
        }else{
            $query = mysqli_query($connect,"SELECT * FROM news WHERE `user` = '$user' ORDER BY id DESC");
            $arr = [];
            while ($result = mysqli_fetch_assoc($query)){
                $arr[] = $result;
            }
            $this->arr = $arr;
        }

    }

    public function getArrNews(){
        return $this->arr;
    }

    public static function deleteNews($connect,$id){
        mysqli_query($connect,"DELETE FROM `news` WHERE `news`.`id` = '$id'");
    }

    public static function changeName($connect,$id,$data){
        mysqli_query($connect,"UPDATE `news` SET `name` = '$data' WHERE `news`.`id` = '$id'");
    }

    public static function changeCategory($connect,$id,$data){
        mysqli_query($connect,"UPDATE `news` SET `category` = '$data' WHERE `news`.`id` = '$id'");
    }

    public static function changeDate($connect,$id,$data){
        mysqli_query($connect,"UPDATE `news` SET `date` = '$data' WHERE `news`.`id` = '$id'");
    }

    public static function changeUser($connect,$id,$data){
        mysqli_query($connect,"UPDATE `news` SET `user` = '$data' WHERE `news`.`id` = '$id'");
    }

    public static function changeDesc($connect,$id,$data){
        mysqli_query($connect,"UPDATE `news` SET `description` = '$data' WHERE `news`.`id` = '$id'");
    }

    public static function changeText($connect,$id,$data){
        mysqli_query($connect,"UPDATE `news` SET `text` = '$data' WHERE `news`.`id` = '$id'");
    }

    public static function changeImg($connect,$id,$data){
        $name = $data['name'];
        $path = 'assets/post_img/' . $name;
        copy($data['tmp_name'], '../../assets/post_img/' . $name);
        mysqli_query($connect,"UPDATE `news` SET `img` = '$path' WHERE `news`.`id` = '$id'");
    }

    public static function addNew($connect,$data,$file){
       if($_SESSION['rule'] == 'admin'){
           $name = $data['name'];
           $category = $data['category'];
           $date = $data['date'];
           $user = $data['user'];
           $description = $data['description'];
           $text = $data['text'];
       }else{
           $name = $data['name'];
           $category = $data['category'];
           $date = $data['date'];
           $user = $_SESSION['login'];
           $description = $data['description'];
           $text = $data['text'];
       }
        $name_img = $file['img']['name'];
        $path = 'assets/post_img/' . $name_img;
        copy($file['img']['tmp_name'], '../../assets/post_img/' . $name_img);
        mysqli_query($connect,"INSERT INTO `news` VALUES (null,'$name','$text','$date','$category','$path','$user','$description')");
    }

    //system methods
    public static function redirect(){
        header('Location: ../index.php');
    }

}