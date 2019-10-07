<?php
require_once 'functions.php';


function viweInfo($arr){
	foreach ($arr as $key => $value) {
		echo "<h4>{$key}:</h4>";
		foreach ($value as $key => $value) {
			echo "<h5>{$key} = {$value}C<h5>";
		}
		echo "<br>";
	}
}

function averageValue($arr){
	$average_value = 0;
	foreach ($arr as $key => $value) {
		$average_value_day = 0;
		foreach ($value as $k => $v) {
			$average_value_day += $v;
		}
		$average_value_day = $average_value_day / count($value);
		$average_value_day = round($average_value_day, 2);
		$average_value += $average_value_day;
	}
	$average_value = $average_value / count($arr);
	$average_value = round($average_value,2);
	echo "<h4 style='color:red;'>Аverage value = {$average_value}C</h4>";
}
function search($arr){
	if($_POST['search_form'] != 'Все'){
		foreach ($arr as $key => $value) {
			if($_POST['search_form'] == $key){
				echo "<h4>{$key}:</h4>";
				foreach ($value as $key => $value) {
					echo "<h5>{$key} = {$value}C<h5>";
				}
				echo "<br>";
			}
		}
		return true;
	}else{
		return false;
	}
}
