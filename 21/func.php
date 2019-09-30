<?php
require_once 'functions.php';

function viewCountry($arr){
	foreach ($arr as $key => $value) {
		echo " <a href='Kromski.php?continent={$key}'>{$key}</a>";
	}
}
function showCountry($arr){
	foreach ($arr as $key => $value) {
		if ($key == $_GET['continent']){
			foreach ($value as $k => $v) {
				echo " <a href='Kromski.php?country={$k}'>{$k}</a>";
			}
		}
	}
}
function showCountryInfo($arr){
	foreach ($arr as $key => $value) {
		foreach ($value as $k => $v) {
			if ($k == $_GET['country']) {
			    echo "<br>";
			    echo '<h4>' . $v['metropolis'] . '</h4>';
                echo "<img src='img/" . $v['img'] . "' width='300'>";
                echo "<br><br>";
                echo '<p><b>Площадь:</b> ' . $v['area'] . '</p>';
                echo '<p><b>Население:</b> ' . $v['people_count'] . '</p>';
			}
		}
	}
}