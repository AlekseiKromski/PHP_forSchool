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
				echo $v;
			}
		}
	}
}