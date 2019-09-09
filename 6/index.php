<html>
    <head>
        <title>Выполнение заданий</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        
    </head>
    <body>
        <form method="post">
            <table>
                <tr>
                    <td colspan="3">Выбери правельные цвета флага</td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td bgcolor="blue" style="width: 129px;"></td>
                    <td>
                        <select name="oneColor">
                            <option value="Черный">Черный</option>
                            <option  value="Синий">Синий</option>
                            <option  value="Белый">Белый</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td bgcolor="black" id="td_color"></td>
                    <td>
                        <select name="twoColor">
                            <option  value="Белый">Белый</option>
                            <option  value="Синий">Синий</option>
                            <option  value="Черный">Черный</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td bgcolor="white" id="td_color"></td>
                    <td>
                        <select name="threeColor">
                            <option  value="Белый">Белый</option>
                            <option  value="Черный">Черный</option>
                            <option  value="Синий">Синий</option>
                        </select>
                    </td>
                </tr>
            </table>
            <h1>Это флаг страны:</h1>
            Эстония <input type="radio" name="country" value="Эстония">
            Россия <input type="radio" name="country" value="Россия">
            Германия <input type="radio" name="country" value="Германия">
            Литва <input type="radio" name="country" value="Литва">
            <input type="submit" value="Проверить">           
        </form>
        <?php
           //print_r($_POST);
            
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $oneColor = $_POST['oneColor'];
                $twoColor = $_POST['twoColor'];
                $threeColor = $_POST['threeColor'];
                if(!empty($_POST['country'])){
                    $result = $_POST['country'];
                }
                if($oneColor = 'Синий' and $twoColor = 'Черный' and $threeColor = 'Белый' and $result == 'Эстония'){
                    echo '<img src="Eesti.jpg">';
                    echo '<p style="color:red;"><b>Ты угадал!</b></p>';
                }else{
                    echo '<p style="color:red;"><b>Попробуй еще раз!</b></p>';
                }
            }
        ?>
    </body>
</html>

