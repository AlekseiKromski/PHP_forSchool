<?php
require_once 'functions.php'; //for debuging array
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
            include_once 'readFromFile.php';
            include_once 'AddIntoFile.php';
            ReadFromFile::createLinks();
            if(isset($_GET['id'])){
                ReadFromFile::displayInfo($_GET['id']);
            }
        ?>
        <form method="post">
            <input type="text" name="id">
            <input type="text" name="nameCategory">
            <input type="text" name="DescCategory">
            <input type="submit">
        </form>
        <?php
            if(!empty($_POST)){
                AddIntoFile::AddNewCat($_POST['id'], $_POST['nameCategory'], $_POST['DescCategory']);
            }
        ?>
    </body>
</html>

