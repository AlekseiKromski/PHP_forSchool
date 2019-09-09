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
                Введите фамилию
                <input type="text" name="surname">
            </p>
            <p>
                1 вопрос: Какого типа переменная $a=5 ?
                <select name="qs1">
                    <option value="NaN">NaN</option>
                    <option value="String">String</option>
                    <option value="Integer">Integer</option>
                    <option value="Float">Float</option>
                </select>
            </p>
            <p>
                2 вопрос: Чему будет равен результат 18%11  ?
                <select name="qs2">
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="7">7</option>
                    <option value="15">15</option>
                </select>
            </p>
            <p>
                3 вопрос: Что такое PHP ?
                <select name="qs3">
                    <option value="Посудомойка">Посудомойка</option>
                    <option value="Язык верстки">Язык верстки</option>
                    <option value="Язык программирования">Язык программирования</option>
                    <option value="Язык разговора">Язык разговора</option>
                </select>
            </p>
            <p>
                4 вопрос: Оператор условия PHP ?
                <select name="qs4">
                    <option value="switch">switch</option>
                    <option value="case">case</option>
                    <option value="while">while</option>
                    <option value="if">if</option>
                </select>
            </p>
            <p>
                5 вопрос: Синтаксис оператора цикла FOR ?
                <select name="qs5">
                    <option value="for($i = 0; $i > 10; $i++)">for($i = 0; $i > 10; $i++)</option>
                    <option value="for($i = 0, $i > 10, $i++)">for($i = 0, $i > 10, $i++)</option>
                    <option value="for($i++; $i > 10; $i = 0)">for($i++; $i > 10; $i = 0)</option>
                    <option value="for($i++, $i > 10, $i = 0)">for($i++, $i > 10, $i = 0)</option>
                </select>
            </p>
            <p>
                <input name="submit" type="submit" value="submit">
            </p>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $surname = $_POST['surname'];
                $qs1 = $_POST['qs1'];
                $qs2 = $_POST['qs2'];
                $qs3 = $_POST['qs3'];
                $qs4 = $_POST['qs4'];
                $qs5 = $_POST['qs5'];
                $result = 0;
                //Для вывода количества правильных ответов
                if($qs1 == 'Integer'){
                    $result++;
                }
                if ($qs2 == '7') {
                    $result++;
                }
                if ($qs3 == 'Язык программирования') {
                    $result++;
                }
                if ($qs4 == 'if') {
                    $result++;
                }
                if ($qs5 == 'for($i = 0; $i > 10; $i++)' ) {
                    $result++;
                }
            
            ?>
            <p>Студент: <?php echo $surname;?></p>
            <table class="table col-md-6">
                <thead>
                  <tr>
                    <th scope="col">Вопрос</th>
                    <th scope="col">ваш ответ</th>
                    <th scope="col">Правильный ответ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Какого типа переменная $a=5 ?</td>
                    <td><?php echo $qs1; ?></td>
                    <td>Integer</td>
                  </tr>
                  <tr>
                    <td>Чему будет равен результат 18%11  ?</td>
                    <td><?php echo $qs2; ?></td>
                    <td>7</td>
                  </tr>
                  <tr>
                    <td>Что такое PHP ?</td>
                    <td><?php echo $qs3; ?></td>
                    <td>Язык программирования</td>
                  </tr>
                  <tr>
                    <td>Оператор условия PHP </td>
                    <td><?php echo $qs4; ?></td>
                    <td>if</td>
                  </tr>
                  <tr>
                    <td>Синтаксис оператора цикла FOR ?</td>
                    <td><?php echo $qs5; ?></td>
                    <td>for($i = 0; $i > 10; $i++)</td>
                  </tr>
                </tbody>
            </table>
            <?php
            echo 'Вы ответили правильно: ' . $result . ' раз';
            }
        ?>
    </body>
</html>

