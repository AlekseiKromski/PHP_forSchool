<?php
function discriminant($a,$b,$c){
    $d = $b ** 2 - 4 * $a * $c ;
    return $d;
}
function root($d,$a,$b){
    if($d > 0){
        $x1 = (-$b + sqrt($d)) / 2*$a;
        $x2 = (-$b - sqrt($d)) / 2*$a;
        $result = 'X1 = ' . $x1 . ' , ' . 'X1 = ' . $x2;
        return $result;
    } elseif($d == 0){
        $x = -($b/(2*$a));
        return $x;
    } elseif ($d < 0) {
        return 'Нету решения';
    }
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
                Введите значение a: 
                <input type="text" name="a">
            </p>
            <p>
                Введите значение b: 
                <input type="text" name="b">
            </p>
            <p>
                Введите значение c: 
                <input type="text" name="c">
            </p>
            <p>
                <input type="submit" value="Отправить">
            </p>
        </form>
        
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
              if(isset($_POST['a']) and isset($_POST['b']) and isset($_POST['c']))
                $a = $_POST['a'];
                $b = $_POST['b'];
                $c = $_POST['c'];           
                $d = discriminant($a, $b, $c);
                $result = root($d, $a, $b);  
                echo "<h4>Ответ: {$result}</h4>";
            }
            
        ?>
        
    </body>
</html>

