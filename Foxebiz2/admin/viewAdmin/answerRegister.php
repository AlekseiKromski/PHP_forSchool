<?php
ob_start();

if(isset($result)){
    if($result[0] == true){
        ?>
        <div class="container">
            <div class="alert alert-info">
                <strong>Пользователь добавлен.</strong><a href="index"> Dashboard</a>
            </div>
        </div>
        <?php
    }elseif($result[0] == false){
        ?>
        <div class="container">
            <div class="alert alert-info">
                <strong>Ошибка!</strong><?php echo $result[1]; ?><a href="registerForm"> Form register</a>
        </div>
        <?php
    }
}
$content = ob_get_clean();
include_once "viewAdmin/layout/layout.php";