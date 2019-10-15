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
	    <?php
	    require_once 'readfile.php';
	    viewMenu($weather_list);
	    if(!empty($_GET)){
	    	if (isset($_GET['mounth_search'])) {
	    		viewMounthInfo($weather_list);
	    	}elseif(isset($_GET['timeOfYear_search'])){
	    		viewTimeOfYearhInfo($weather_list);
	    	}elseif(isset($_GET['date_search'])){
	    		date_search($weather_list);
	    	}else{
	    		viewAllInfo($weather_list);
	    	}	
	    }else{
	    	viewAllInfo($weather_list);
	    }

	    ?>
    </body>
</html>

