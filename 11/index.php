<html>
    <head>
        <title>Выполнение заданий</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php
            function zad_a($n){
                $result = $n / 60;
                return $result;
            }
            function zad_b($n){
                $result = $n / 3600;
                return $result;
            }
            function zad_c($n){
                $result = $n % 60;
                return $result;
            }
            function zad_d($n){
                $h = intdiv($n, 3600);
                $m = floor(($n % 3600)/60);
                $s = $n - (($h * 3600) + ($m * 60)) ;
                return "<h3>Часы: {$h} ,Минуты: {$m} ,Секунды: {$s}</h3>";
            }
            $n = 4855;
            echo zad_d($n);
            
        ?>
    </body>
</html>

