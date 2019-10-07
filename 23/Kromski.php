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
        //debug($weather);
        ?>
        <form method="post">
            <select name="search_form">
                <option value="Пн">Пн</option>
                <option value="Вт">Вт</option>
                <option value="Ср">Ср</option>
                <option value="Чт">Чт</option>
                <option value="Пт">Пт</option>
                <option value="Сб">Сб</option>
                <option value="Вс">Вс</option>
                <option value="Все">Все</option>
            </select>
            <input type="submit" value="Поиск">
        </form>

        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(!empty($_POST['search_form'])){
                if(!search($weather)){
                    viweInfo($weather); //Output array value
                    averageValue($weather); //Output averageValue (среднее значение)
                }
            }
        }else{
            viweInfo($weather); //Output array value
            averageValue($weather); //Output averageValue (среднее значение)
        }
        ?>
    </body>
</html>

