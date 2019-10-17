<?php
require_once 'functions.php'; //for debuging array
require_once 'view_functions.php';
require_once 'foreachArr.php';
?>
<html>
    <head>
        <title>Контрольная работа 3 / 2 задание</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    	<div class="col-md-6 margin_center">
    		<a href="Kromski.php">Назад</a>
    	</div>
    	<br>
		<div class="col-md-2 margin_center">
			<?php
				$search = $_POST['search'];
				foreach ($city as $key => $value) {
					if($key == $search){
						echo "<h5>Результат поиска: </h5>";
						echo "<h4>{$key}</h4>";
						echo "<img src='img/{$value['img_name']}' width='150px'>";
						echo "<br><br>";
						echo "<p>Количество населения: {$value['count_people']}</p>";
						echo "<p>Уезд: {$value['maakond']}</p>";
						echo "<hr>";
					}
				}
			?>
		</div>
    </body>
</html>

