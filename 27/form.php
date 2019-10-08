<?php
require_once 'functions.php'; //for debuging array
$file = file('database.txt');

foreach ($file as $line) {
	echo "<ul>";
	$info = explode('|', $line);
	echo "<li>Имя: <b>{$info[0]}</b></li>";
	echo "<li>Группа: <b>{$info[1]}</b></li>";	
	echo "</ul>";
}


