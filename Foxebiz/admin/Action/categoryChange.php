<?php
require_once '../config/config_require.php';
require_once '../' . $config_core['Category'];
if(isset($_GET['change']) and isset($_GET['id'])){
    $id = $_GET['id'];
    if($_GET['change'] == 'delete'){
        Category::deleteCategory($connect,$id);
        Category::redirect();
    }elseif ($_GET['change'] == 'add'){
        if(!empty($_POST)){
            Category::addCategory($connect,$_POST);
            Category::redirect();
        }else{
            Category::redirect();
        }
    }
}else{
    Category::redirect();
}
