<?php
function menu($arr){
	foreach ($arr as $k => $v) {
        echo " <a href='Kromski.php?news={$k}'>{$k}</a>";
    };
    echo "<hr>";
}
function outputInfo($arr){
	foreach ($arr as $k => $v) {
		if($k == $_GET['news']){
			echo "<h4>{$k}</h4>";
			foreach ($v as $value) {
				echo "<p>{$value}</p>";
			}
		};
	}
}
function news($arr){
	if(empty($_GET['news'])){
		foreach ($arr as $k => $v) {
			echo "<h4>{$k}</h4>";
			foreach ($v as $value) {
				echo "<p>{$value}</p>";
			}
			echo "<hr>";
		}        
    } elseif($_GET['news'] == 'Кухня'){
        outputInfo($arr);
    } elseif($_GET['news'] == 'Путешествия'){
        outputInfo($arr);
    } else{
        outputInfo($arr);
    }
}