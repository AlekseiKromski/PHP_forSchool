<?php
require_once 'functions.php';
?>
<html>
    <head>
        <title>Выполнение контрольной работы. Задание 1</title>
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
    			$result = $summ / round(count($arr),2);
    			return $result;
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
    			return $arr;
    		}
    		function EighthTask($arr){
    			asort($arr);
    			foreach ($arr as $key => $val) {
			    	echo "$key => $val" . "<br>";
				}	 
    		}
    		function TenthTask($arr){
    			arsort($arr);
    			foreach ($arr as $key => $val) {
			    	echo "$key => $val" . "<br>";
				}	 
    		}
    		
	    	//Массивы
    		$arr[0] = 'html';
    		$arr[1] = 'css';
    		//debug($arr);

    		$arr2 = array('html','css','js');
    		//debug($arr2);

    		$arr3 = array('html' => '1','css' => '2','js'=>'3');
    		//debug($arr3);

    		$arr4 = array('html' => '1','css' => '2','js'=>'3','JQuery' => '4');
    		unset($arr4['JQuery']); //Удаляем элемент массива
    		foreach ($arr4 as $key => $value) {
    			//echo $key . '<br>';
    			//echo $value . '<br>';
    		}

    		debug($arr = FirstTask());
    		debug(SecondTask($arr)); // Вывод суммы всех элементов массива
    		debug(ThirdTask($arr)); //Вывод среднего арефметич. значения
			debug(FourthTask($arr)); //Вывод только четных чисел
			debug(FirthTask($arr));
			debug(SixthTask($arr));
			debug(SeventhTask($arr));
			debug(EighthTask($arr));
			debug(TenthTask($arr));
    	?>
    </body>
</html>

