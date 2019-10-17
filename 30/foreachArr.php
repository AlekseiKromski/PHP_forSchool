<?php
require_once 'functions.php'; //for debuging array

$file = file('city.txt');
foreach ($file as $line) {
    $info = explode('|', $line); 
    $city[$info[0]]['count_people'] = $info[1];
    $city[$info[0]]['img_name'] = $info[2];
    $city[$info[0]]['maakond'] = $info[3];
}
