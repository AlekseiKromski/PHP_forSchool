<?php
require_once '../config/config_require.php';
require_once '../' . $config_core['News'];
if(isset($_GET['change']) and isset($_GET['id'])){
    $id = $_GET['id'];
    if($_GET['change'] == 'delete'){
        News::deleteNews($connect,$id);
        News::redirect();
    }elseif ($_GET['change'] == 'change'){
        if(!empty($_POST)){
            if($_POST['name']){
                News::changeName($connect,$id,$_POST['name']);
                News::redirect();
            }elseif ($_POST['category']){
                News::changeCategory($connect,$id,$_POST['category']);
                News::redirect();
            }elseif ($_POST['date']){
                News::changeDate($connect,$id,$_POST['date']);
                News::redirect();
            }elseif ($_POST['user']){
                if($_SESSION['rule'] == 'admin'){
                    News::changeUser($connect,$id,$_POST['user']);
                    News::redirect();
                }
            }elseif ($_POST['description']){
                News::changeDesc($connect,$id,$_POST['description']);
                News::redirect();
            }elseif ($_POST['text']){
                News::changeText($connect,$id,$_POST['text']);
                News::redirect();
            }
        }elseif(!empty($_FILES)){
            News::changeImg($connect,$id,$_FILES['img']);
            News::redirect();
        }else{
            News::redirect();
        }
    }elseif ($_GET['change'] == 'add'){
        if(!empty($_FILES['img']['name'])){
            News::addNew($connect,$_POST,$_FILES);
            News::redirect();
        }else{
            News::redirect();
        }

    }
}else{
    News::redirect();
}