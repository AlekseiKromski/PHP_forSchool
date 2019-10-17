<?php
require_once 'functions.php'; //for debuging array
require_once 'students.php';
?>
<html>
    <head>
        <title>Контрольная работа 3 / 1 задание</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

		<form method="post">
			<select name="student">
				<?php
					foreach ($students as $key => $value) {
						echo "<option value='{$value}'>$value</option>";
					}
				?>
			</select>
			<input type="text" name="assessment">
			<input type="submit" value="поставить оценку">
		</form>
		<?php
			$student = $_POST['student'];
			$assessment = $_POST['assessment'];
			$data = $student . ' : ' . $assessment . PHP_EOL;
			file_put_contents('assessment_student', $data, FILE_APPEND)
		?>
    </body>
</html>

