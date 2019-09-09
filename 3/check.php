<?php

if(!empty($_POST)){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $text = $_POST['message'];
    echo 'Имя: ' . $name . '<br>';
    echo 'Фамилия: ' .$surname . '<br>';
    echo 'E-mail: ' .$email . '<br>';
    echo 'Сообщение: ' . $text . '<br><br>';
}else{
    header('Location: index.php');
}
