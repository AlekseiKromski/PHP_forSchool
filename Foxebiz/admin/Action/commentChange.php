<?php
require_once '../config/config_require.php';
require_once '../' . $config_core['Comments'];
if(isset($_GET['change']) and isset($_GET['id_post']) and isset($_GET['id'])){
    $id = $_GET['id'];
    $id_post = $_GET['id_post'];
    if($_GET['change'] == 'delete'){
        Comments::deleteComments($connect,$id);
        Comments::redirect($id_post);
    }
}else{
    Comments::redirectMainPage();
}