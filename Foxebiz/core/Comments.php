<?php


class Comments
{
    protected $arr;

    public function ReadFromDB($connect,$id)
    {
        $query = mysqli_query($connect,"SELECT * FROM comments WHERE `post_id` = '$id'");
        $arr = [];
        while ($result = mysqli_fetch_assoc($query)){
            $arr[] = $result;
        }
        $this->arr = $arr;
    }

    public function getArrComments(){
        return $this->arr;
    }

    public static function addComments($connect, $data,$id){
        if(empty($data['name']) or empty($data['text']) ){
            return 'no_data';
        }else{
            $name = htmlspecialchars($data['name']);
            $text = htmlspecialchars($data['text']);
            $date = date('Y-m-d');
            mysqli_query($connect, "INSERT INTO `comments` VALUES (null,'$name','$text','$date','$id')");
        }
    }

    public static function redirect($id){
        header("Location: ../single-news.php?id=$id");
    }
}