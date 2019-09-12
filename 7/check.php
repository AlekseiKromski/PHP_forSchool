
<?php
//for debug
function print_data($data){
    echo "<pre>";
    print_r($data);
    echo "<pre>";
}

//print_data($_POST);

if($_POST['Mr'] == 'on'){
    $gender = 'Mr';
}else{
    $gender = 'Mrs';
}
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Date = $_POST['Data'];
?>
<html>
    <head>
        <title>Выполнение заданий</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="main_div2">
            <h3>First Name: <?php echo $FirstName; ?></h3>
            <h3>Last Name: <?php echo $LastName; ?></h3>
            <h3>Email: <?php echo $Email; ?></h3>
            <h3>Password: <?php echo $Password; ?></h3>
            <h3>Date: <?php echo $Date; ?></h3>
        </div>
    </body>
</html>