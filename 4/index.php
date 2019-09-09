<html>
    <head>
        <title>Выполнение заданий</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <form method="post">
            <br>
            <p>
                Введите первое число <input type="text" name="firstNumber">
            </p>
            <p>
                Введите второе число <input type="text" name="secondNumber">
            </p>
            <p>
                Выберите операцию
                <select name="action">
                    <option value="umnoz">Умножение</option>
                    <option value="delenie">Деление</option>
                    <option value="slozenie">Сложение</option>
                    <option value="vichislen">Вычетание</option>
                </select>
            </p>
            <p>
                <input name="submit" type="submit" value="submit">
            </p>
        </form>
        <hr>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $firstNumber = $_POST['firstNumber'];
                $secondNumber = $_POST['secondNumber'];
                $action = $_POST['action'];
                if($action == 'umnoz'){
                    $result = $firstNumber * $secondNumber;
                    echo $firstNumber . ' * ' . $secondNumber . ' = ' . $result ;
                } elseif($action == 'delenie'){
                    $result = $firstNumber / $secondNumber;
                    echo $firstNumber . ' / ' . $secondNumber . ' = ' . $result ;
                }elseif($action == 'slozenie'){
                    $result = $firstNumber + $secondNumber;
                    echo $firstNumber . ' + ' . $secondNumber . ' = ' . $result ;
                }elseif($action == 'vichislen'){
                    $result = $firstNumber - $secondNumber;
                    echo $firstNumber . ' - ' . $secondNumber . ' = ' . $result ;
                }
            }
        ?>
    </body>
</html>

