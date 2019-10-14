<?php
require_once 'functions.php'; //for debuging array
?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
	    <form method="post">
	    	<input type="text" name="name">
	    	<?php
	    		$file_ques = file('Ques.txt');
	    		foreach ($file_ques as $line) {
		            $info = explode('|', $line);
		            $test = str_replace(' ', '', $info[0]);
		            echo  '<br>'. $info[0];
		            echo $info[1];
		            echo "<input type='radio' name='{$test}' value='{$info[1]}'>";
		            echo $info[2];
		            echo "<input type='radio' name='{$test}' value='{$info[2]}'>";
		            echo $info[3];
		            echo "<input type='radio' name='{$test}' value='{$info[3]}'>";
        		}
        		echo  '<br>'. "<input type='submit'>";
        		if($_SERVER['REQUEST_METHOD'] == 'POST'){
               		?>
               		<table class="table">
					  <thead>
					    <tr>
					    	<th scope="col">Вопрос</th>
					    	<th scope="col">Ваш ответ</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php
					   	$z = 0;
					    foreach ($_POST as $key => $value) {
					      	if($key != 'name'){
					      		$answers[$z] = $value;
					      		$z++;
					      	}
					    }
					    $z = 0;
					    foreach ($file_ques as $line) {
					    	$info = explode('|', $line);
					      	echo "<tr>";
					      	echo "<td>{$info[0]}</td>";
					      	echo "<td>{$answers[$z]}</td>";
					      	echo "</tr>";
					      	$z++;
					    }
					    ?>
					  </tbody>
					</table>
               		<?php
            	}
            	$prav_otv = 0;
			    if(isset($answers)){
			    	foreach ($answers as $key => $value) {
				    	$value = preg_replace('/\s+/', '', $value);
				    	if(3 == $value){
				    		$prav_otv++;
				    	} elseif ('Kohtla-Jarve' == $value) {
				    		$prav_otv++;
				    	} elseif (15 == $value){
				    		$prav_otv++;
				    	} elseif ('Ида-Вирумаа' == $value){
				    		$prav_otv++;
				    	} elseif ('Ревель' == $value){
				    		$prav_otv++;
				    	}
			    	}
			    	$str_otv = "Кол.-во правельных ответов {$_POST['name']}: " . $prav_otv;
			    	echo $str_otv;
			    	$f = fopen("answer.txt", 'w');
			    	fwrite($f, $str_otv);
			    	fclose($f);

			    }
	    	?>
	    </form>

    </body>
</html>

