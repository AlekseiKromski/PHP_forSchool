<?php


class SingleNew
{
    protected $arr;
    protected static $name;

    public function __construct($connect,$id)
    {
        $query = mysqli_query($connect,"SELECT * FROM news WHERE `id` = '$id'");
        $arr = [];
        while ($result = mysqli_fetch_assoc($query)){
            $arr[] = $result;
        }
        $this->arr = $arr;
        self::$name = $arr[0]['name'];
    }

    public function getArrProduct(){
        return $this->arr;
    }

    public static function getName(){
        echo self::$name;
    }


}