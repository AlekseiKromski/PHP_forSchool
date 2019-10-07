<?php
require_once 'functions.php'; //for debuging array
?>
<html>
    <head>
        <title>Задание 1. Погода</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php
        require_once "info.php";
        require_once "func.php"; 
        ?>
        <div class="row">
            <div class="col-md-12 menuAll">
                <?php
                echo "<a href='Kromski.php'>Все</a>";
                viewMenu($books);
                ?>               
            </div>
        </div>
        <div class="row">
            <?php
                viewBook($books);
            ?>
        </div>
    </body>
</html>

