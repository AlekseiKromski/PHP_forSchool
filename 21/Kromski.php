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
        require_once "info.php";
        require_once "func.php";
        //debug($continent);
        echo "<a href='Kromski.php' style='color:red;'>Назад</a>";
        viewCountry($continent);
        echo "<br>";
        if(!empty($_GET['continent'])){
            showCountry($continent);
        }
        if(!empty($_GET['country'])){
            showCountryInfo($continent);
        }
        ?>
    </body>
</html>

