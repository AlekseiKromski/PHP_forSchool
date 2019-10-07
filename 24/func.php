<?php
require_once 'functions.php';

function viewMenu($arr){
	foreach ($arr as $key => $value) {
		echo " <a href='Kromski.php?category={$key}'>{$key}</a>";
	}
	echo "<form method='post'>Поиск по автору: <input type='search' name='search'><input type='submit' value='Поиск'></form>";
	echo "<form method='post'>
	<input type='text' name='user_price'>
	<select name='user_price_variable'>
        <option value='Smaller'>Меньше</option>
        <option value='More'>Больше</option>
    </select>
    <input type='submit' value='Поиск'>
	</form>";

}
function viewBook($arr){
	if(empty($_GET['category'])){
		if(!empty($_POST['search'])){
			foreach ($arr as $key => $value) {
				foreach ($value as $k => $v) {
					if($_POST['search'] == $v['Author']){
						echo "<div class='col-md-4 mb-5 mt-5 booksDiv'>
						<h3>{$v['Name']}</h3>
						<p>Автор: {$v['Author']}</p>
						<img src='img/{$v['img']}' width='200px'>
						<br><br>
						<p>Цена: <span style='color:red;'><b>{$v['Price']}</b></span>$</p>
						<a href='Kromski.php?book={$k}'>Купить</a>
						</div>";						
					}
				}
			}
		}else{
			foreach ($arr as $key => $value) {
				foreach ($value as $k => $v) {
					echo "<div class='col-md-4 mb-5 mt-5 booksDiv'>
					<h3>{$v['Name']}</h3>
					<p>Автор: {$v['Author']}</p>
					<img src='img/{$v['img']}' width='200px'>
					<br><br>
					<p>Цена: <span style='color:red;'><b>{$v['Price']}</b></span>$</p>
					<a href='Kromski.php?book={$k}'>Купить</a>
					</div>";
				}
			}
		}
	}else{
		foreach ($arr as $key => $value) {
			if($_GET['category'] == $key){
				if(!empty($_POST['search'])){
					foreach ($value as $k => $v) {
						if($_POST['search'] == $v['Author']){
							echo "<div class='col-md-4 mb-5 mt-5 booksDiv'>
							<h3>{$v['Name']}</h3>
							<p>Автор: {$v['Author']}</p>
							<img src='img/{$v['img']}' width='200px'>
							<br><br>
							<p>Цена: <span style='color:red;'><b>{$v['Price']}</b></span>$</p>
							<a href='Kromski.php?book={$k}'>Купить</a>
							</div>";
						}
					}	
				}else{
					foreach ($value as $k => $v) {
						echo "<div class='col-md-4 mb-5 mt-5 booksDiv'>
						<h3>{$v['Name']}</h3>
						<p>Автор: {$v['Author']}</p>
						<img src='img/{$v['img']}' width='200px'>
						<br><br>
						<p>Цена: <span style='color:red;'><b>{$v['Price']}</b></span>$</p>
						<a href='Kromski.php?book={$k}'>Купить</a>
						</div>";
					}
				}
			}
		}		
	}
	
    
}


