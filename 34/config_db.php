<?php
$connect = mysqli_connect('localhost','root', '','test2');
if(!$connect){
    echo 'нету подключения к базе данных';
    die;
}else{
    mysqli_query($connect,"SET NAMES 'utf8'");
    mysqli_query($connect,"SET CHARACTER SET 'utf8'");
    mysqli_query($connect,"SET SESSION collation_connection = 'utf8_general_ci'");
}
