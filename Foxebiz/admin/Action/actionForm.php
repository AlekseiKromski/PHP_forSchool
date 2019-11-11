<?php
require_once '../config/config_require.php';
require_once $config_core['Login'];
//debug($_POST);
$login = $_POST['login'];
$password = $_POST['password'];
$object = new Login($login, $password,$connect);
