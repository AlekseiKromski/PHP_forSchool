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
            $f = fopen('test.txt', 'w');
            fwrite($f, 'Первая запись ');
            fwrite($f, 'Вторая запись');
            fclose($f);
        ?>
    </body>
</html>

