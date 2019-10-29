<?php
class AddIntoFile
{
    public static function AddNewCat($id, $name, $desc){
        $str = $id . '|' . $name . '|' . $desc . PHP_EOL;
        file_put_contents('categories.txt', $str, FILE_APPEND );
    }
}