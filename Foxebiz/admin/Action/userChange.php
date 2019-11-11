<?php
require_once '../config/config_require.php';
require_once '../' . $config_core['User'];
if(isset($_GET['change']) and isset($_GET['id'])){
    $id = $_GET['id'];
    if($_GET['change'] == 'delete'){
        User::deleteUser($connect,$id);
        User::redirect();
    }elseif ($_GET['change'] == 'add'){
        if(!empty($_POST)){
            User::addUser($connect, $_POST);
            User::redirect();
        }else{
            User::redirect();
        }
    }
}else{
    User::redirect();
}