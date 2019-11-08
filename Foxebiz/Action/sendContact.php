<?php
if(!empty($_POST)){
    require_once '../config/config_require.php';
    require_once $core_classes_actions['sendContact'];
    if(Contact::sendContact($connect,$_POST) != 'no_data'){
        Contact::redirect();
    }else{
        header("Location: ../contact.php");
    }
}else{
    header('Location: contact.php?error=no_post');
}