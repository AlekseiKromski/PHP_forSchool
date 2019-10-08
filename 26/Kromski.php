<?php
require_once 'functions.php'; //for debuging array
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body> 
        <?php
        require_once 'functions.php'; //for debuging array
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $group = $_POST['group'];
            $line = "$name | $group" . PHP_EOL;
            file_put_contents('database.txt', $line, FILE_APPEND);
            echo "<a href='form.php'>Посмотреть таблицу</a>";
        }
        ?> 
        <form method="post">
            <p>
                Имя: 
                <input type="text" name="name">
            </p>
            <p>
                Группа: 
                <select name="group" >
                    <option value="JPTVR18">JPTVR18</option>
                    <option value="SPTVR17">SPTVR17</option>
                    <option value="NPTVR14">NPTVR14</option>
                </select>
            </p>
            <input type="submit">
        </form>
    </body>
</html>

