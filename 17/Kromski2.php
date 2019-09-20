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
                'Салат',
                'Суп',
                'Кола',
                'Шаурма',
                'Мiвина'
            ];
            $arr2 = [
                'Салат' => 102,
                'Суп' => 200,
                'Кола' => 30,
                'Шаурма' => 400,
                'Мiвина' => 5
            ];   
        ?>   
        <form method="post">
            <?php
            foreach ($arr as $value) {
                echo "{$value} <input type='radio' name='{$value}'><br>";
            };
            ?>
            <input type="submit">
        <?php
        debug($_POST);
        $summ = 0;
        if($_POST['Салат'] == 'on'){
            $summ += $arr2['Салат'];
        }elseif ($_POST['Суп'] == 'on') {
            $summ += $arr2['Суп'];
        }elseif ($_POST['Кола'] == 'on') {
            $summ += $arr2['Кола'];
        }elseif ($_POST['Шаурма'] == 'on') {
            $summ += $arr2['Шаурма'];
        }elseif ($_POST['Мiвина'] == 'on') {
            $summ += $arr2['Мiвина'];
        }
        echo $summ;
        ?>
        </form> 	
    </body>
</html>

