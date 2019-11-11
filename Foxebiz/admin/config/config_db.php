<?php
if(!$connect = mysqli_connect('localhost','root','','foxbiz')){
    echo 'Ошибка подключения к базе данных';
    die;
}