<?php
require_once 'config/config_require.php';
if(!isset($_SESSION['login']) and !isset($_SESSION['password'])){
    header('Location: login.php');
}
if($_SESSION['rule'] != 'admin'){
    header('Location: userIndex.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Foxbiz - главная</title>

    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/styles/style.min.css">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">

    <!-- Percent Circle -->
    <link rel="stylesheet" href="assets/plugin/percircle/css/percircle.css">

    <!-- Chartist Chart -->
    <link rel="stylesheet" href="assets/plugin/chart/chartist/chartist.min.css">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>

    <!-- Color Picker -->
    <link rel="stylesheet" href="assets/color-switcher/color-switcher.min.css">
</head>

<body>
<?php
require_once 'include_files/header.php';
require_once 'include_files/nav_bar.php';
require_once 'include_files/switcher.php';
require_once $config_core['User'];
$object_user = new User($connect);
?>
<div id="wrapper">
    <div class="main-content">
        <?php
        if(isset($_GET['error'])){
            if ($_GET['error'] == 'not_get'){
                echo '<h4 style="color:red;">Request error : no get parameters</h4>';
            }elseif($_GET['error'] == 'perm'){
                echo '<h4 style="color:red;">Permission error : no permission</h4>';
            }elseif ($_GET['error'] == 'not_post'){
                echo '<h4 style="color:red;">Request error : no post parameters</h4>';
            }
        }
        ?>
        <?php
        if (isset($_GET['change'])) {
            if($_GET['change'] == 'add'){
                ?>
                <div>
                    <h4>add user</h4>
                    <form action="Action/userChange.php?change=add&id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
                        <input type="text" name="login" placeholder="Login" class="form-control" style="width: 24%; margin-right: 1%;height: 42px;"><br>
                        <input type="password" name="password" placeholder="password" class="form-control" style="width: 24%; margin-right: 1%;height: 42px;"><br>
                        <select name="rule" id="" class="form-control" style="width: 24%; margin-right: 1%;height: 42px;">
                            <option value="Manager">Manager</option>
                            <option value="Writer">Writer</option>
                        </select><br>
                        <input type="submit" class="btn btn-success" value="add new">
                    </form>
                </div>
                <br>
                <?php
            }
        }
        ?>
        <div class="row small-spacing">
            <div class="col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Информация</h4>
                    <button class="btn btn-success"><a href='users.php?change=add&id={$v['id']}' style='color: white'>add</a></button>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Login</th>
                            <th scope="col">Rule</th>
                            <th scope="col">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($object_user->getArrUsers() as $k => $v){

                            echo "<tr>
                            <td>{$v['login']}</td>
                            <td>{$v['rule']}</td>
                            <td>
                            <button class=\"btn btn-danger\"><a href='Action/userChange.php?change=delete&id={$v['id']}' style='color: white'>delete</a></button><br><br>
                            </td>
                            </tr>   
                            ";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.main-content -->
</div><!--/#wrapper -->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="assets/script/html5shiv.min.js"></script>
<script src="assets/script/respond.min.js"></script>
<![endif]-->
<!--
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/scripts/jquery.min.js"></script>
<script src="assets/scripts/modernizr.min.js"></script>
<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/plugin/nprogress/nprogress.js"></script>
<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
<script src="assets/plugin/waves/waves.min.js"></script>
<!-- Full Screen Plugin -->
<script src="assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

<!-- Percent Circle -->
<script src="assets/plugin/percircle/js/percircle.js"></script>

<!-- Google Chart -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- Chartist Chart -->
<script src="assets/plugin/chart/chartist/chartist.min.js"></script>
<script src="assets/scripts/chart.chartist.init.min.js"></script>

<!-- FullCalendar -->
<script src="assets/plugin/moment/moment.js"></script>
<script src="assets/plugin/fullcalendar/fullcalendar.min.js"></script>
<script src="assets/scripts/fullcalendar.init.js"></script>

<script src="assets/scripts/main.min.js"></script>
<script src="assets/color-switcher/color-switcher.min.js"></script>
</body>
</html>