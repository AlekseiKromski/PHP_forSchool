<html>
<head>
    <title>Dashboard</title>
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link href="public/css/mystyle.css" rel="stylesheet">
    <!-- Font Awesome -->    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <!--   SCRIPT        -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <!-- -->
    <?php
        if(isset($_SESSION['userId']) && $_SESSION['sessionId']){
    ?>
    <div class="header clearfix">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <?php

                    echo "<ul>
                        <li role='button'>{$_SESSION['username']}<a href='logout' style='display: inline'> Выйти</a></li>
                    </ul>";
                    if(isset($_SESSION['rule']))  {
                        echo "<a href='categoryAdmin'>News categries</a>";
                        echo "<a href='newsAdmin'>News List</a>";
                        echo "</h4>";
                    }
                ?>

            </div>
        </nav>
    </div>
    <!-- -->
    <?php } ?>
    <div id="content" style="padding-top:20px; ">
        <?php
        if(isset($content)){
            echo $content;
        }
        ?>
        <!-- -->
    </div>
    <footer class="footer">
        <p>&copy; 2019 Design Admin dashboard<i class="fa fa-child"></i></p>
    </footer>
</div> <!-- /container -->
</body>
</html>