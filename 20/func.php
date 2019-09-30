<?php
require_once 'functions.php';
function menu($arr){
	foreach ($arr as $key => $value) {
		echo " <a href='Kromski.php?news={$key}' class='nav_links'>{$key}</a>";
	}
}
function outputInfo($arr){
	foreach ($arr as $key => $value) {
		if($key == $_GET['news']){
			echo "<h4>" . ucfirst($key) . "</h4>";	
			echo "<p>" . $value['desc'] . "</p>";	
			echo "<img src='img/" . $value['img'] . "' width='300px' class='phone_img'>";
			echo "<br>";
			echo "<a href='#' class='btn btn-danger col-md-12'>" . $value['price'] . "$</a>";
			echo "<br><br>";
		};
	}
}
function productNews($arr){
	if(empty($_GET['news'])){
		foreach ($arr as $key => $value) {
			echo "<h4>" . ucfirst($key) . "</h4>";	
			echo "<p>" . $value['desc'] . "</p>";	
			echo "<img src='img/" . $value['img'] . "' width='300px' class='phone_img'>";
			echo "<br>";
			echo "<a href='Kromski.php?news={$key}' class='btn btn-danger col-md-12'>" . $value['price'] . "$</a>";
			echo "<br><br>";	
		}   
	} else{
        outputInfo($arr);
    }
}
