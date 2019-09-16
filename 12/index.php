<html>
    <head>
        <title>Выполнение заданий</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php
            function Leng($xA,$yA,$xB,$yB){
                $result = sqrt(pow($xA-$xB,2)+pow($yA - $yB,2)); 
                return $result;
            }
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $xA = $_POST['xA'];
                $yA = $_POST['yA'];
                $xB = $_POST['xB'];
                $yB = $_POST['yB'];
                echo "Ответ: " . Leng($xA, $yA, $xB, $yB);
            }
        ?>
        <form method="post">
            <p>
                xA: 
                <input type="text" name="xA">
            </p>
            <p>
                yA: 
                <input type="text" name="yA">
            </p>
            <p>
                xB: 
                <input type="text" name="xB">
            </p>
            <p>
                yB: 
                <input type="text" name="yB">
            </p>
            <p>
                <input type="submit" value="Отправить">
            </p>
        </form>
    </body>
</html>

