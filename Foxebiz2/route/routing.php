<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host) [$num];

if($path == '' OR $path == 'index' OR $path = 'index.php'){
    $response = Controller::StartSite();
}else{
    $response = Controller::error404();
}