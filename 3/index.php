<?php
function check($data){
    if(empty($data)){
        echo 'Пустое поле';
    } 
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $text = $_POST['message'];
    echo 'Имя: ' . $name . '<br>';
    echo 'Фамилия: ' .$surname . '<br>';
    echo 'E-mail: ' .$email . '<br>';
    echo 'Сообщение: ' . $text . '<br><br>';
}else{
    echo '';
}
?>
<html>
    <head>
        <title>Выполнение заданий</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <form method="post">
            <p>
                Имя: <input name="name" type="text">
                <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    check($name); 
                }
                ?>
            </p>
            
            <p>
                Фамилия: <input name="surname" type="text">
                <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    check($surname); 
                }
                ?>
            </p>
            <p>
                email: <input name="email" type="text">
                <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    check($email); 
                }
                ?>
            </p>
            <p>
                Сообщение<br><textarea name="message" cols="30" rows="5"></textarea>
                <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    check($text); 
                }
                ?>
            </p>
            <p>
                <input name="submit" type="submit" value="submit">
            </p>
        </form>
    </body>
</html>

