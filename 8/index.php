<?php
    function print_data($data){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
    $massa = $_POST['massa'];
    $Ei = $_POST['Edenici_izmerenia'];
    if($Ei == 'Kg'){
        $result = $massa;
    } elseif($Ei == 'Mg'){
        $result = $massa / 1000000;
    } elseif($Ei == 'G'){
        $result = $massa / 1000;
    } elseif($Ei == 'T'){
        $result = $massa * 1000;
    } elseif($Ei == 'Cen'){
        $result = $massa * 100;
    }
?>

<html>
    <head>
        <title>Выполнение заданий</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class='main_div'>
            <h3>Перевод веса</h3>
            <hr>
            <form method="post">
                 <div class="form-group">
                    <label for="exampleInputMassa">Введите ваш вес:</label>
                    <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp" name='massa'>
                </div>
                <div class="form-group">
                <select class="browser-default custom-select" name="Edenici_izmerenia">
                    <option selected>Выберите еденицы</option>
                    <option value="Kg">Кг</option>
                    <option value="Mg">Мг</option>
                    <option value="G">Г</option>
                    <option value="T">Т</option>
                    <option value="Cen">Цен.</option>
                </select>
                </div>
                <button type="submit" class="btn btn-primary">Расчет</button>
            </form>
            <p> 
                Ваш реультат:
                <?php echo $result;?>
                <?php echo $Ei;?>
            </p>
        </div>
    </body>
</html>

