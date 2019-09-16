<?php
function debug($data){
    echo "<pre>";
    print_r($data);
    echo '</pre>';
}
?>
<html>
    <head>
        <title>Выполнение заданий</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php
            function koordinati($A,$B,$C,$D){
                //main
                $AB = $B['B2'] - $A['A2'];
                $AD = $AB / 2;
                $DC = $C['C'] - $D['D']; //Для решения AC
                $AC = sqrt(($DC ** 2) + ($AD ** 2));
                $result = 'Ответ: '.$AC;
                return $result;
            }
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //debug($_POST);
                $A = [
                    'A' => $_POST['A'],
                    'A2' => $_POST['A2']
                ];
                $B = [
                    'B' => $_POST['B'],
                    'B2' => $_POST['B2']
                ];
                $C = [
                    'C' => $_POST['C'],
                    'C2' => $_POST['C2']
                ];
                $D = [
                    'D' => $_POST['D'],
                    'D2' => $_POST['D2']
                ];
                echo koordinati($A, $B, $C, $D);
                
            }
        ?>
        <form method="post">
            <p>
                A: 
                <input type="text" name="A">
                <input type="text" name="A2">
            </p>
            <p>
                B: 
                <input type="text" name="B">
                <input type="text" name="B2">
            </p>
            <p>
                C: 
                <input type="text" name="C">
                <input type="text" name="C2">
            </p>
            <p>
                D: 
                <input type="text" name="D">
                <input type="text" name="D2">
            </p>
            <p>
                <input type="submit" value="Отправить">
            </p>
        </form>
    </body>
</html>

