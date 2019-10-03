<?php
require_once 'functions.php';


function viewAllInfo($arr){
	echo "<ul>";
	foreach ($arr as $key => $value) {
		echo "<li>{$key}</li>";
		foreach ($value as $key => $value) {
			echo "<ul>";
			echo "<li>{$key}</li>";
				echo "<ul>";
					echo "<li>{$value['Adress']}</li>";
					echo "<li>{$value['PhoneNumber']}</li>";
				echo "</ul>";
			echo "</ul>";
		}
	}
	echo "</ul>";
}
function viewMenu($arr){
	foreach ($arr as $key => $value) {
		echo " <a href='Kromski.php?group={$key}'>{$key}</a>";
	}
	?>
	<form name="search" method="post">
    	<input type="search" name="query" placeholder="Поиск">
    	<button type="submit">Найти</button> 
	</form>
	<?php

}

function viewGetInfo($arr){
	foreach ($arr as $key => $value) {
		if($key == $_GET['group']){
			echo "<ul>";
			foreach ($value as $k => $v) {
				echo "<li>{$k}</li>";
				echo "<ul>";
					echo "<li>{$v['Adress']}</li>";
					echo "<li>{$v['PhoneNumber']}</li>";
				echo "</ul>";
			}
			echo "</ul>";
		}
	}

}
  
function search($arr){
	foreach ($arr as $key => $value) {
		foreach ($value as $key => $value) {
			if($value['Adress'] == $_POST['query']){	
				echo "<ul>";
				echo "<li>{$key}</li>";
				echo "<ul>";
					echo "<li>{$value['Adress']}</li>";
					echo "<li>{$value['PhoneNumber']}</li>";
				echo "</ul>";
				echo "</ul>";	
			}
		}	
	}


}