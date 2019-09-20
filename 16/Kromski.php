<?php
require_once 'functions.php';
?>
<html>
    <head>
        <title>Массивы</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    	<?php
			function FirstTask(){
    			$arr = []; 
    			for ($i=0; $i <= 10; $i++) { 
    				array_push($arr, rand(1,20));
    			}
    			return $arr;
    		}
    		function SecondTask($arr){
    			$summ = 0;
    			foreach ($arr as $value) {
    				$summ += $value;
    			}
    			return $summ;
    		}
    		function ThirdTask($arr){
    			$summ = 0;
    			foreach ($arr as $value) {
    				$summ += $value;
    			}
    			$result = $summ / count($arr);
    			return round($result);
    		}
    		function FourthTask($arr){
    			foreach ($arr as $key => $value) {
    				if( $value % 2 != 0){
    					unset($arr[$key]);
    				}	
    			}
    			return $arr;
    		}
    		function FirthTask($arr){
    			$max = 0;
    			foreach ($arr as $key => $value) {
    				if($value > $max){
    					$max = $value;
    					$result = "Номер максимального числа = {$key} " . "<br>" . "Значение максимального числа = {$value}";
    				}
    			}
    			return $result;
    		}
    		function SixthTask($arr){
    			$min = 100;
    			foreach ($arr as $key => $value) {
    				if($value < $min){
    					$mix = $value;
    					$result = "Номер минимального числа = {$key} " . "<br>" . "Значение минимального числа = {$value}";
    				}
    			}
    			return $result;
    		}
    		function SeventhTask($arr){
    			$max = 0;
    			$min = 100;
    			foreach ($arr as $key => $value) {
    				if($value > $max){
    					$max = $value;
    				}
    			}
    			foreach ($arr as $key => $value) {
    				if($value < $min){
    					$mix = $value;
    				}
    			}
    			foreach ($arr as $key => $value) {
    				if($value == $max or $value == $mix){
    					unset($arr[$key]);
    				}
    			}
				$summ = 0;
    			foreach ($arr as $k => $v) {
    				$summ += $v;
    			}
    			$result = $summ / count($arr);
    			return 'Среднее арефм. без большего и меньшего = ' . round($result);
    		}
    		function EighthTask($arr){
    			asort($arr);
    			foreach ($arr as $key => $val) {
			    	echo "$key => $val" . "<br>";
				}	 
    		}
    		function NinthTask($arr){
    			arsort($arr);
    			foreach ($arr as $key => $val) {
			echo 'Задание 1';	    	echo "$key => $val" . "<br>";
				}	 
    		}
			
			echo '<h4>Задание 1</h4>';	    		
    		debug($arr = FirstTask());
    		echo "<hr>";
			
			echo '<h4>Задание 2</h4>';	
    		debug($arr);
    		echo "<hr>";
			
			echo '<h4>Задание 3</h4>';	
    		debug(SecondTask($arr)); // Вывод суммы всех элементов массив
    		echo "<hr>";
			
			echo '<h4>Задание 4</h4>';	
    		debug(ThirdTask($arr)); //Вывод среднего арефметич. значения
    		echo "<hr>";
			
			echo '<h4>Задание 5</h4>';	
			debug(FourthTask($arr)); //Вывод только четных чисел
			echo "<hr>";
			
			echo '<h4>Задание 6</h4>';	
			debug(FirthTask($arr));
			echo "<hr>";
			
			echo '<h4>Задание 7</h4>';	
			debug(SixthTask($arr));
			echo "<hr>";
			
			echo '<h4>Задание 8</h4>';	
			debug(SeventhTask($arr));
			echo "<hr>";
			
			echo '<h4>Задание 9</h4>' . '<br>';	
			debug(EighthTask($arr));
			echo "<hr>";
			
			echo '<h4>Задание 10</h4>' . '<br>';
			debug(NinthTask($arr));
			echo "<hr>";
    	?>
    </body>
</html>

