<?php
if(!$connect = mysqli_connect('localhost','root','','foxbiz')){
    echo 'Нет подключения к базе данных ';
    die;
}