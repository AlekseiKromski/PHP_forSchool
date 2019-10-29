<?php
class Categoria{

    private $id;
    private $nimetus;
    private $kirjeldus;

    function __construct($id, $nimi, $teskt){
        $this->id = $id;
        $this->nimetus = $nimi;
        $this->kirjeldus = $teskt;

    }

    public function getId(){
        return $this->id;
    }
    public function getNimetus(){
        return $this->nimetus;
    }
    public function getKirjeldus(){
        return $this->kirjeldus;
    }
}