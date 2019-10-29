<?php


class AddNewCategory
{
    private $id;
    private $name;
    private $desc;

    function __construct($id, $nimi, $teskt){
        $this->id = $id;
        $this->$name = $nimi;
        $this->$desc = $teskt;

    }

    public function getId(){
        return $this->id;
    }
    public function getNimetus(){
        return $this->$name;
    }
    public function getKirjeldus(){
        return $this->$desc;
    }
}