<?php

require_once 'config_db.php'; //connect to database
require_once 'ilm.php';
require_once 'functions.php'; //for debuging array
class ReadFromDB
{
    public static function readDB($connect){
        $weather = array();
        $query = mysqli_query($connect,"SELECT * FROM weather");
        while($query_fetch = mysqli_fetch_assoc($query)){
            $weather[] = new ilm($query_fetch['id'],$query_fetch['day_tem'],$query_fetch['night_tem'],$query_fetch['week_day'],$query_fetch['img']);
        }
        return $weather;
    }

    public static function createTables($connect){
        //создание таблицы
        $weathers = self::readDB($connect);
        echo "<table class=\"table\" style='background-color: #121111; color:white; float: left'>";
            echo "
            <thead>
                <tr>
                  <th scope=\"col\">Время суток</th>
                  <th scope=\"col\">Понедельник</th>
                  <th scope=\"col\">Вторник</th>
                  <th scope=\"col\">Среда</th>
                  <th scope=\"col\">Четверг</th>
                  <th scope=\"col\">Пятница</th>
                </tr>
              </thead>
            ";
            echo "<tbody>";
                echo "<tr>";
                    echo "<td>День</td>";
                  foreach ($weathers as $weather) {
                      echo "<td>
                        <img src='{$weather->getImg()}' width='50px'>
                        {$weather->getDay_tem()}
                       </td>";
                  }
                echo"</tr>";
                echo "<tr>";
                echo "<td>Ночь</td>";
                foreach ($weathers as $weather) {
                    echo "<td><img src='{$weather->getImg()}' width='50px'>{$weather->getNight_tem()}</td>";
                }
                echo"</tr>";
            echo "</tbody>";
        echo "</table>";
    }
    public static function createMenu($connect){
        //создание меню
        $weathers = self::readDB($connect);
        echo "<ul class=\"list-group\">";
            foreach ($weathers as $weather){
                echo "<li class=\"list-group-item\">{$weather->getWeek_day}</li>";
            }

        echo "</ul>";
    }
}