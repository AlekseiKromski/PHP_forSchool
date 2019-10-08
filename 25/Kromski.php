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
        /*
            $f = fopen('test.txt', 'w');
            fwrite($f, 'Первая запись');
            fwrite($f, 'Вторая запись');
            fclose($f);

            $f = fopen('test.txt','r');
            while ($line = fgets($f, 4096)) {
                echo $line . '<br>';
            }
            fclose($f);
        
            $arr = file('test2.txt');
            debug($arr);
            $ez = [1,2,3];
            $ez2 = [5,6,7];
            file_put_contents('test2.txt', $ez);
            file_put_contents('test2.txt', implode("\n", $ez2));
            debug($arr);
            */
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $name = $_POST['name'];
                $massage = $_POST['massage'];
                $date = date('d.m.Y H:i:s');
                $line = "$massage | $name | $date" . PHP_EOL;
                file_put_contents('database.txt', $line, FILE_APPEND);  
            }
        ?>
        <form method="post">
            <p>
                Введите имя:
                <input type="text" name="name">
            </p>
            <p>
                Введите сообщение:<br>
                <textarea name="massage" cols="30" rows="10"></textarea>
            </p>
            <input type="submit" value="отправить">
        </form>
        <hr>
        <?php
        /*
        $f = fopen('database.txt','r');
        while ($line2 = fgets($f, 4096)) {
            echo $line2 . '<br>';
        }
        fclose($f);
        */
        $file = file('database.txt');
        foreach ($file as $line) {
            $info = explode('|', $line);
            echo "<h5>Имя: {$info[1]}</h5>
            <p>Дата: <i>{$info[2]}</i></p>
            <p>сообщение: {$info[0]}</p>
            ";
        }
        ?>
        <hr>
    </body>
</html>

