<?php
require_once 'functions.php';
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php
            $arr = [
                'Салат' => 102,
                'Суп' => 360,
                'Кола' => 75,
                'Шаурма' => 300,
                'Мiвина' => 13
            ];
        ?>   
        <form method="post">
            <?php
            foreach ($arr as $key => $value) {
                echo "{$key} <input type='radio' name='{$key}' value='{$value}'><br>";
            };
            ?>
            <input type="submit" value="Отправить">
        <?php   
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //debug($_POST);
            $summ = 0;
            foreach ($_POST as $key => $value) {
                $summ += $value;
            }
            echo '<br><br>' . 'Общая сумма за обед: ' . "<b>{$summ}</b>";
            $nalog = ($summ*20)/120;
            $nalog2 = $summ - $nalog;
            $nalog += $summ; 
            $nalog = round($nalog,3);     
            echo '<br>' . 'Сумма без налога: ' . "<b>{$nalog2}</b>";
            echo '<br>' . 'Сумма с налогом: ' . "<b>{$nalog}</b>";
        }

        ?>
        </form> 	
    </body>
</html>

