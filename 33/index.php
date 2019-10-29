<?php
require_once 'functions.php'; //for debuging array
require_once 'config_db.php'; //connect to database
?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php
            include 'ReadFromDB.php';
            ReadFromDB::readDB($connect);
        ?>
    <div class="container">
        <?php
            ReadFromDB::createTables($connect);
            ReadFromDB::createMenu($connect);
        ?>
    </div>
    </body>
</html>

