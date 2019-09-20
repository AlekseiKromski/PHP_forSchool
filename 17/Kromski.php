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
                'Стул' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the',
                'Стол' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the',
                'Кровать' => 'Lorem Ipsum is simply dummy text of the printing ',
            ];
            foreach($arr as $key => $value) {
                echo "<a href='Kromski.php?id={$key}'>{$key}</a><br>";
            }
            if($_GET['id'] == 'Стул'){
                echo $arr['Стул'];
            }elseif($_GET['id'] == 'Стол'){
                echo $arr['Стол'];   
            }elseif($_GET['id'] == 'Кровать'){
                echo $arr['Кровать'];
            }
        ?>    	
    </body>
</html>

