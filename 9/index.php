<?php
    function print_data($data){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
    //print_data($_POST);
    $var = $_POST['var_okr'];
    if($var = 'R'){
        $R = $_POST['R'];
        $D = 2 * $_POST['R'];
        $L = 2 * pi() * $_POST['R'];
        $S = pi() * ($_POST['R'] ** 2);  
    } elseif($var = 'D'){
        $R = $_POST['D'] / 2;
        $D = $_POST['D'];
        $L = pi() * $_POST['D'];
        $S = pi() * pow($R);
    } elseif($var = 'L'){
        $D = $_POST['L'] / pi();
        $R = $D / 2;
        $L = $_POST['L'];
        $S = pi() * $R * $R;
    } elseif($var = 'S'){
        $R = sqrt($_POST['S'] / pi() );
        $D = 2 / $R;
        $L = 2 * $R;
        $S = $_POST['S'];
    }
    $result = 'Радиус: ' . $R . '<br>';
    $result .= 'Диаметр: ' . $D . '<br>';
    $result .= 'Длинна: ' . $L . '<br>';
    $result .= 'Площадь: ' . $S;     
?>

<html>
    <head>
        <title>Выполнение заданий</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class='main_div'>
            <h3>Вывод значений окружности</h3>
            <hr>
            <form method="post">
                <select class="browser-default custom-select" name="var_okr">
                    <option selected>Выберите варианты: </option>
                    <option value="R">R</option>
                    <option value="D">D</option>
                    <option value="L">L</option>
                    <option value="S">S</option>
                </select>
                <br>
                <br>
                <input type="text" class="form-control" placeholder="Значение" name="R">
                <br>
                <p>
                    <?php echo $result;?>
                </p>
                <br>
                <button type="submit" class="btn btn-primary">Расчет</button>
            </form>
        </div>
    </body>
</html>

