<html>
    <head>
        <title>My fitst website</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
    <body>
        <h1><?php echo 'Алексей Крымский'; ?></h1>
        <h2><?php echo 'JPTVR18'; ?></h2>
        <?php
        echo<<<END
        <p>Ida-Virumaa Kutsehariduskeskus (IVKHK)<br>on suurim Ida-Virumaa kutseõppeasutus, kus õpib keskmiselt 1200 õpilast ja töötab 130 inimest. </p>
END;
        ?>
        <?php
            /*Запсиал свой первый коментарий*/
            //Записал свой второй коментарий
        ?>
        <?php 
            $name = "Aleksei";
            echo "<h3>I : My name is $name</h3>";
            echo "Bot : Привет, ", $name;
            echo "<br>";
            echo "<br>";
        ?>
        <?php 
            $a = 5;
            $b = 7;
            $s = $a * $b;
            echo 'Площадь равна: ',$s;
            echo "<br>";
            echo "<br>";
        ?>
        <?php 
            define('PI', 3.14);
            $r = 20;
            $answer = (PI * $r) * 2;
            echo 'Длинна окружности = ', $answer;
            echo "<br>";
            echo "<br>";
        ?>
        <?php 
            $a = 3;
            $b = 4;
            $c = sqrt(pow($a, 2) + pow($b, 2));
            echo 'Пифагор = ', $c;
            echo "<br>";
            echo "<br>";
        ?>
        <?php 
            $mounth = rand(1, 12);
            echo "Число месяца = ", $mounth, '<br>';
            if ($mounth == 1 or $mounth == 12 or $mounth == 2 ){
                echo 'Время года - Зима';
            } elseif($mounth == 3 or $mounth == 4 or $mounth == 5){
                echo 'Время года - Весна';
            } elseif($mounth == 6 or $mounth == 7 or $mounth == 8){
                echo 'Время года - Лето';
            } elseif($mounth == 9 or $mounth == 10 or $mounth == 11){
                echo 'Время года - Осень';
            }else{
               echo 'Не соответсвует ни одному условию'; 
            }
            echo "<br>";      
        ?>
        <?php 
            switch ($mounth){
                case 1:
                case 2:
                case 12:
                  echo 'Время года - Зима'; 
                break;
            
                case 3:
                case 4:
                case 5:
                  echo 'Время года - Весна';  
                break;
                case 6:
                case 7:
                case 8:
                  echo 'Время года - Лето';
                break;
                case 9:
                case 10:
                case 11:
                  echo 'Время года - Осень';
                break;
            
                default :
                    echo 'Не соответсвует ни одному условию'; 
                break;
            } 
            echo "<br>";
            echo "<br>";
        ?>
        <?php 
            for ($i = 1; $i < 11; $i++){
                echo $i . ' ';
            } 
            echo "<br>";
            for ($i = 10; $i > 0; $i--){
                echo $i . ' ';
            }
            echo "<br>";
            for ($i = 1; $i < 11; $i++){   
                if($i % 2 == 0){
                   echo $i . ' '; 
                }
                
            }
            echo "<br>";
            for ($i = 1; $i < 11; $i = $i + 2){
                echo $i . ' ';
            } 
            echo "<br>";
            for ($i = 3; $i < 11; $i = $i + 3){
                echo $i . ' ';
            }
            echo "<br>";
            for ($i = 5; $i < 11; $i = $i + 5){
                echo $i . ' ';
            }
            echo "<br>";
            echo "<br>";
        ?>
        <?php 
            for($i = 0; $i < 11; $i++){
                $result = $i * 2;
                echo "2 * $i = " , $result, "<br>" ;
            }
            echo "<br>";
            echo "<br>";
        ?>
        <?php 
            echo '<h1>Таблица умножения от 1 до 10</h1>';
            for($i = 0; $i < 11; $i++){
                for($z = 0; $z < 11; $z++){
                    $result = $i * $z;
                    echo "$i * $z = " , $result, "<br>" ;
                }
                echo '<br>';
            }
            echo "<br>";
            echo "<br>";
        ?>
    </body>
</html>
