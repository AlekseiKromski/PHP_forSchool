<?php


class Comments
{

    private $arr;
    private $arr_comments;

    public function getAllNews($connect)
    {
        $query = mysqli_query($connect,"SELECT id,name FROM news ORDER BY id DESC");
        $arr = [];
        while ($query_fetch = mysqli_fetch_assoc($query)){
            $arr[] = $query_fetch;
        }
        $this->arr = $arr;
    }

    public function getComments($connect,$id){
        $query = mysqli_query($connect,"SELECT * FROM comments WHERE `post_id` = '$id'");
        $arr = [];
        while ($query_fetch = mysqli_fetch_assoc($query)){
            $arr[] = $query_fetch;
        }
        $this->arr_comments = $arr;
    }

    public static function deleteComments($connect,$id){
        mysqli_query($connect,"DELETE FROM `comments` WHERE `comments`.`id` = '$id'");
    }

    //geters
    public function getArr()
    {
        return $this->arr;
    }

    public function getArrComments()
    {
        return $this->arr_comments;
    }

    //system methods

    public static function redirect($id){
        header("Location: ../comments.php?id={$id}");
    }

    public static function redirectMainPage(){
        header("Location: ../comments.php");
    }

}