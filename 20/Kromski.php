<?php
require_once 'functions.php';
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php
            require_once ('info.php');
            require_once ('func.php');
        ?>	
        <table class="table">
          <thead>
            <tr>
                <th scope='col'>#</th>
                <?php
                    foreach ($lessons as $value) {
                        echo "<th scope='col'>{$value}</th>";
                    }
                    echo "<th scope='col'>Средний балл</th>";
                ?>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach ($assessments as $key => $value) {
                    $average_mark = 0; //средний балл
                    echo "<tr>";
                    echo "<th scope='row'>{$key}</th>";
                    foreach ($value as $k => $v) {
                        echo "<td>{$v}</td>";
                        $average_mark = $average_mark + $v;
                    }
                    $average_mark = $average_mark / count($value);
                    round($average_mark,2);
                    echo "<td>{$average_mark}</td>";
                    echo "</tr>";
                }
            ?>
          </tbody>
        </table>
    </body>
</html>

