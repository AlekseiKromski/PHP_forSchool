<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host) [$num];

if($path == "" OR $path == 'index'){
    $response = controllerAdmin::formLoginSite();
}elseif($path == 'login'){
    $response = controllerAdmin::loginAction();
}elseif($path == 'logout'){
    $response = controllerAdmin::logoutAction();
}else{
    $response = controllerAdmin::error404();
}