<?php
require_once 'functions.php'; //for debuging array

function viewAllInfo($arr){
	foreach ($arr as $key => $value) {
		echo "<h4>{$key}</h4>";
		echo "<img src='img/{$value['img_name']}' width='150px'>";
		echo "<br><br>";
		echo "<p>Количество населения: {$value['count_people']}</p>";
		echo "<p>Уезд: {$value['maakond']}</p>";
		echo "<hr>";
	}
}
function viewMenuMaakond(){
	echo "<a href='Kromski.php'>Все</a> ";
	echo "<a href='Kromski.php?maakond=Harjumaa'>Harjumaa</a> ";
	echo "<a href='Kromski.php?maakond=Ida-Virumaa'>Ida-Virumaa</a> ";
	echo "<a href='Kromski.php?maakond=Tartumaa'>Tartumaa</a>";

}
function viewPersonMaakondMenu($arr, $maakond){
	viewMenuMaakond();
	echo "<br>";
	foreach ($arr as $key => $value) {
		if($value['maakond'] == $maakond){
			if($key == 'Tallinn' or $key == 'Keila' or $key == 'Jõelähtme'){
				echo "<a href='Kromski.php?maakond={$value['maakond']}&city={$key}'>{$key}</a> ";
			}	
		}	
	}
}

function viewCityInfo($arr,$city){
	if($city == 'Tallinn'){
		foreach ($arr as $key => $value) {
			if($key == 'Tallinn'){
				echo "<h4>{$key}</h4>";
				echo "<img src='img/{$value['img_name']}' width='150px'>";
				echo "<br><br>";
				echo "<p>Количество населения: {$value['count_people']}</p>";
				echo "<p>Уезд: {$value['maakond']}</p>";
				echo "<hr>";
			}
		}
	}

	if($city == 'Keila'){
		foreach ($arr as $key => $value) {
			if($key == 'Keila'){
				echo "<h4>{$key}</h4>";
				echo "<img src='img/{$value['img_name']}' width='150px'>";
				echo "<br><br>";
				echo "<p>Количество населения: {$value['count_people']}</p>";
				echo "<p>Уезд: {$value['maakond']}</p>";
				echo "<hr>";
			}
		}
	}

	if($city == 'Jõelähtme'){
		foreach ($arr as $key => $value) {
			if($key == 'Jõelähtme'){
				echo "<h4>{$key}</h4>";
				echo "<img src='img/{$value['img_name']}' width='150px'>";
				echo "<br><br>";
				echo "<p>Количество населения: {$value['count_people']}</p>";
				echo "<p>Уезд: {$value['maakond']}</p>";
				echo "<hr>";
			}
		}
	}

	if($city == 'Narva'){
		foreach ($arr as $key => $value) {
			if($key == 'Narva'){
				echo "<h4>{$key}</h4>";
				echo "<img src='img/{$value['img_name']}' width='150px'>";
				echo "<br><br>";
				echo "<p>Количество населения: {$value['count_people']}</p>";
				echo "<p>Уезд: {$value['maakond']}</p>";
				echo "<hr>";
			}
		}
	}
	if($city == 'Kohtla-Järve'){
		foreach ($arr as $key => $value) {
			if($key == 'Kohtla-Järve'){
				echo "<h4>{$key}</h4>";
				echo "<img src='img/{$value['img_name']}' width='150px'>";
				echo "<br><br>";
				echo "<p>Количество населения: {$value['count_people']}</p>";
				echo "<p>Уезд: {$value['maakond']}</p>";
				echo "<hr>";
			}
		}
	}
	if($city == 'Jõhvi'){
		foreach ($arr as $key => $value) {
			if($key == 'Jõhvi'){
				echo "<h4>{$key}</h4>";
				echo "<img src='img/{$value['img_name']}' width='150px'>";
				echo "<br><br>";
				echo "<p>Количество населения: {$value['count_people']}</p>";
				echo "<p>Уезд: {$value['maakond']}</p>";
				echo "<hr>";
			}
		}
	}

	if($city == 'Tartu'){
		foreach ($arr as $key => $value) {
			if($key == 'Tartu'){
				echo "<h4>{$key}</h4>";
				echo "<img src='img/{$value['img_name']}' width='150px'>";
				echo "<br><br>";
				echo "<p>Количество населения: {$value['count_people']}</p>";
				echo "<p>Уезд: {$value['maakond']}</p>";
				echo "<hr>";
			}
		}
	}
	if($city == 'Elva'){
		foreach ($arr as $key => $value) {
			if($key == 'Elva'){
				echo "<h4>{$key}</h4>";
				echo "<img src='img/{$value['img_name']}' width='150px'>";
				echo "<br><br>";
				echo "<p>Количество населения: {$value['count_people']}</p>";
				echo "<p>Уезд: {$value['maakond']}</p>";
				echo "<hr>";
			}
		}
	}
	if($city == 'Kalaste'){
		foreach ($arr as $key => $value) {
			if($key == 'Kalaste'){
				echo "<h4>{$key}</h4>";
				echo "<img src='img/{$value['img_name']}' width='150px'>";
				echo "<br><br>";
				echo "<p>Количество населения: {$value['count_people']}</p>";
				echo "<p>Уезд: {$value['maakond']}</p>";
				echo "<hr>";
			}
		}
	}

}
function viewMaakondInfo($arr,$maakond){
	if($maakond == 'Harjumaa'){
		foreach ($arr as $key => $value) {
			if($key == 'Tallinn' or $key == 'Keila' or $key == 'Jõelähtme'){
				echo "<h4>{$key}</h4>";
				echo "<img src='img/{$value['img_name']}' width='150px'>";
				echo "<br><br>";
				echo "<p>Количество населения: {$value['count_people']}</p>";
				echo "<p>Уезд: {$value['maakond']}</p>";
				echo "<hr>";
			}
		}
	}elseif($maakond == 'Tartumaa'){
		foreach ($arr as $key => $value) {
			if($key == 'Kalaste' or $key == 'Elva' or $key == 'Tartu'){
				echo "<h4>{$key}</h4>";
				echo "<img src='img/{$value['img_name']}' width='150px'>";
				echo "<br><br>";
				echo "<p>Количество населения: {$value['count_people']}</p>";
				echo "<p>Уезд: {$value['maakond']}</p>";
				echo "<hr>";
			}
		}
	}elseif($maakond == 'Ida-Virumaa'){
		foreach ($arr as $key => $value) {
			if($key == 'Jõhvi' or $key == 'Narva' or $key == 'Kohtla-Järve'){
				echo "<h4>{$key}</h4>";
				echo "<img src='img/{$value['img_name']}' width='150px'>";
				echo "<br><br>";
				echo "<p>Количество населения: {$value['count_people']}</p>";
				echo "<p>Уезд: {$value['maakond']}</p>";
				echo "<hr>";
			}
		}
	}
}
function viewSearchMenu($arr){
	echo "<br>";
	echo "<form method='post' action='Kromski_search.php?search=true'>";
		echo "<input type='search' name='search'>";
		echo "<input type='submit' value='search'>";
	echo "</form>";
}
