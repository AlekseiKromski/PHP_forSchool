<?php
require_once 'functions.php';

$weather = [
	'Январь' => [],
	'Февраль' => [],
	'Март' => [],
	'Апрель' => [],
	'Май' => [],
	'Июнь' => [],
	'Июль' => [],
	'Август' => [],
	'Сентябрь' => [],
	'Октябрь' => [],
	'Декабрь' => [],
	'Ноябрь' => [],
];


foreach ($weather as $key => $value) {
	if($key == 'Февраль'){
		for ($i=0; $i <= 29 ; $i++) { 
			$random = rand(-20,0);
			array_push($weather[$key], $random);
		}
	}elseif($key == 'Январь' or $key == 'Март' or $key == 'Июль' or $key == 'Май' or $key == 'Август' or $key == 'Октябрь' or $key == 'Декабрь'){
		if($key == 'Январь' or $key == 'Декабрь'){
			for ($i=0; $i <= 31 ; $i++) { 
				$random = rand(-20,0);
				array_push($weather[$key], $random);
			}
		}elseif ($key == 'Март' or $key == 'Июль' or $key == 'Май' or $key == 'Август') {
			for ($i=0; $i <= 31 ; $i++) { 
				$random = rand(0,25);
				array_push($weather[$key], $random);
			}
		}else{
			for ($i=0; $i <= 31 ; $i++) { 
				$random = rand(0,12);
				array_push($weather[$key], $random);
			}
		}
		
	}elseif($key == 'Апрель' or $key == 'Июнь' or $key == 'Сентябрь' or $key == 'Ноябрь'){
		if($key == 'Апрель' or $key == 'Июнь'){
			for ($i=0; $i <= 31 ; $i++) { 
				$random = rand(0,25);
				array_push($weather[$key], $random);
			}
		}else{
			for ($i=0; $i <= 30 ; $i++) { 
				$random = rand(0,12);
				array_push($weather[$key], $random);
			}
		}
	}
}

debug($weather); 
