<html>
    <head>
        <title>Выполнение заданий</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <h1>Дано двузначное число.</h1>
        <?php
            $a = 89;
            $result = $a%10;
            $result2 = intval($a/10);
            echo 'Данно число - ' . $a . '<br>';
            echo 'Десятки - ' . $result2 . '<br>';
            echo 'Еденицы - ' . $result;
        ?>
        <br>
        <br>
        <h1>Ресторан</h1>
        <?php
            $a = $b = $c = rand(5, 15);    
            $bludo = 'суп';
            $napitki = 'кола'
        ?>
        <br>
        <table class="table col-md-6">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Обеды</th>
                <th scope="col">Напитки</th>
                <th scope="col">Цена</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><?php echo $bludo; ?></td>
                <td><?php echo $napitki; ?></td>
                <td><?php echo $a; ?></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><?php echo $bludo; ?></td>
                <td><?php echo $napitki; ?></td>
                <td><?php echo $b; ?></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td><?php echo $bludo; ?></td>
                <td><?php echo $napitki; ?></td>
                <td><?php echo $c; ?></td>
              </tr>
              <tr>
                <th scope="row">Итого</th>
                <td></td>
                <td></td>
                <td><?php echo $a + $b + $c; ?></td>
              </tr>
            </tbody>
        </table>
        <br>
        <br>
        <h1>Идеальный вес</h1>
        <?php
            $i  = 184;
            $m = 54;
            $t = 17;
            $gender = 'm';
            
            //Вычесление M id
            if($gender == 'm'){
                $resultM_ID = (3*$i-450+$t) * 0.225 + 40.5;
            }else{
                $resultM_ID = (3*$i-450+$t) * 0.250 + 45.0;
            }
            
            //Вычесление K id
            $resultK_ID = $m / (($i / 100) ** 2);
            
            echo 'Идеальный вес = ' . $resultM_ID . '<br>';
            echo 'Индекс массы тела = ' . $resultK_ID . '<br>';
            
            if( $gender = 'm' ){
                if ($resultK_ID < 20){
                    echo 'Недостаточный вес';
                } elseif ($resultK_ID > 20 and $resultK_ID < 25){
                    echo 'Нормальный вес';
                } elseif ($resultK_ID > 25 and $resultK_ID < 30){
                    echo 'Небольшой избыток';
                }elseif ($resultK_ID > 30 and $resultK_ID < 40){
                    echo 'Лишний вес';
                }
            }else{
                if ($resultK_ID < 19){
                    echo 'Недостаточный вес';
                } elseif ($resultK_ID > 19 and $resultK_ID < 24){
                    echo 'Нормальный вес';
                } elseif ($resultK_ID > 24 and $resultK_ID < 30){
                    echo 'Небольшой избыток';
                }elseif ($resultK_ID > 30 and $resultK_ID < 40){
                    echo 'Лишний вес';
                }
            }
        ?>
        <br>
        <br>
        <h1>Знаки зодиака</h1>
        <?php
            $date_D = 8;
            $date_M = 2;    
            
            //24.08 - 23.09
            if($date_D >= 24 and $date_M == 8 or $date_D <= 23 and $date_M == 9  ){
                echo 'Дева';
            } elseif ($date_D >= 24 and $date_M == 9 or $date_D <= 23 and $date_M == 10){ //24.09 - 23.10
                echo 'Весы';
            } elseif ($date_D >= 24 and $date_M == 10 or $date_D <= 22 and $date_M == 11){
                echo 'Скорпион';
            } elseif ($date_D >= 23 and $date_M == 11 or $date_D <= 21 and $date_M == 12){ 
                echo 'Стрелец';
            } elseif ($date_D >= 22 and $date_M == 12 or $date_D <= 20 and $date_M == 1){ 
                echo 'Козерог';
            } elseif ($date_D >= 21 and $date_M == 1 or $date_D <= 20 and $date_M == 2){ 
                echo 'Водолей';
            } elseif ($date_D >= 21 and $date_M == 2 or $date_D <= 20 and $date_M == 3){ 
                echo 'Рыбы';
            } elseif ($date_D >= 21 and $date_M == 3 or $date_D <= 20 and $date_M == 4){ 
                echo 'Овен';
            } elseif ($date_D >= 21 and $date_M == 4 or $date_D <= 20 and $date_M == 5){ 
                echo 'Телец';
            } elseif ($date_D >= 21 and $date_M == 5 or $date_D <= 21 and $date_M == 6){ 
                echo 'Близнецы';
            } elseif ($date_D >= 22 and $date_M == 6 or $date_D <= 22 and $date_M == 7){ 
                echo 'Рак';
            } elseif ($date_D >= 23 and $date_M == 7 or $date_D <= 23 and $date_M == 8){ 
                echo 'Лев';
            }
        ?>
        <br>
        <br>
        <h1>Дано целое число</h1>
        <?php            
            $Sotni = [
                1 => 'Сто',
                2 => 'Двести',
                3 => 'Тристо',
                4 => 'Четыресто',
                5 => 'Пятьсот',
                6 => 'Шестьсот',
                7 => 'Семьсот',
                8 => 'Восемьсот',
                9 => 'Девятьсот'
            ];
            
            $Desatki = [
                1 => 'десять',
                2 => 'двадцать',
                3 => 'тридцать',
                4 => 'сорок',
                5 => 'пятьдесят',
                6 => 'шестьдесят',
                7 => 'семьдесят',
                8 => 'восемьдесят',
                9 => 'девяносто',
            ];  
            $Desatki2 = [
                10 => 'десять',
                11 => 'одинадцать',
                12 => 'двенадцать',
                13 => 'тринадцать',
                14 => 'четырнадцать',
                15 => 'пятнадцать',
                16 => 'шестнадцать',
                17 => 'семнадцать',
                18 => 'восемнадцать',
                19 => 'девятнадцать',
                20 => 'двадцать',
            ];
            
            $Endenici = [
                1 => 'один',
                2 => 'два',
                3 => 'три',
                4 => 'четыре',
                5 => 'пять',
                6 => 'шесть',
                7 => 'семь',
                8 => 'восемь',
                9 => 'девять'
            ];
            
            $blaclist = [
                10 => 10,
                11 => 11,
                12 => 12,
                13 => 13,
                14 => 14,
                15 => 15,
                16 => 16,
                17 => 17,
                18 => 18,
                19 => 19,
                20 => 20
                
            ];
            
            $k = 220;       
            $result_Sotni = ($k/100)%10; //Сотни
            
            if (in_array($k % 100,$blaclist)){
                $result_Desatki = $k % 100;
                $result = $Sotni[$result_Sotni] . ' ';
                $result .= $Desatki2[$result_Desatki] . ' ';
            }else{
                $result_Desatki = (($k/10)%100) % 10;//Десятки
                $result_Endenici = $k%10;    //Еденицы
                $result = $Sotni[$result_Sotni] . ' ';
                $result .= $Desatki[$result_Desatki] . ' ';     
                $result .= $Endenici[$result_Endenici]; 
            }
            echo $result;
 
        ?>
    </body>
</html>
