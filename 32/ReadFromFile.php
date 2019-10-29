<?php

include 'categoria.php';
require_once 'functions.php'; //for debuging array
class ReadFromFile
{
    public static function readtxt(){
        $allcat = array();
        $file = file('categories.txt');
        foreach ($file as $line){
            $info = explode('|',$line);
            $allcat[] = new Categoria($info[0],$info[1],$info[2]);
        }
        debug($allcat);
        return $allcat;

    }

    public static function createLinks(){
        //создание ссылок с названиями категорий
        $cats = self::readtxt();
        foreach ($cats as $c){
            echo "<a href='index.php?id={$c->getId()}'>{$c->getNimetus()}</a><br>";
        }
    }

    public static function displayInfo($id){
        //вывод информации
        $cats = self::readtxt();
        foreach ($cats as $c){
            if($c->getId() == $id){
                echo "{$c->getKirjeldus()}";
            }
        }
    }
}