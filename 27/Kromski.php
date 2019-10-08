<?php
require_once 'functions.php'; //for debuging array
?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    	<?php debug($_POST); ?>
    <form method="post"> 
    	<input type="text" name="name">
	    <?php
		    $file = file('Ques.txt');
		        foreach ($file as $line) {
		            $info = explode('|', $line);
		            echo "<h5>{$info[0]}</h5>";
		            echo "
		            	{$info[1]}
						<input type='radio' name='$info[0]' value='$info[1]'>
		            ";
		            echo "
		            	{$info[2]}
						<input type='radio' name='$info[0]' value='$info[2]'>
		            ";
		            echo "
		            	{$info[3]}
						<input type='radio' name='$info[0]' value='$info[3]'>
		            ";
		        }
		    ?>   
		<br><br>	
		<input type="submit" value="ответить">
		<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			?>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Вопросы</th>
			      <th scope="col">Ваши ответы</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	$file2 = file('test.txt');
			  	debug($file2);
			  	foreach ($file as $line) {
		            $info = explode('|', $line);
		            echo "<tr>";
			            echo "<td>{$info[0]}</td>";
			            echo "<td>{$file2[0]}</td>";
		            echo "</tr>";

		        }			  		
			  	?>			    	
			  </tbody>
			</table>
			<?php
		}
		?>
	
    </form>
    </body>
</html>

