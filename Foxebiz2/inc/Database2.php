<?php


class Database2
{

    private $conn;
    private $host;
    private $user;
    private $password;
    private $baseName;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->baseName = 'foxbiz';
        $this->connect();
    }

    public function __destruct(){
        $this->disconnect();
    }

    public function connect(){
        try{
            $this->conn = new PDO('mysql:host='.$this->host.''.';dbname='.$this->baseName.'',$this->user,$this->password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

        }catch(Exception $e){
            die('connection failed : '.$e->getMessage());
        }
        return $this->conn;

    }

    public function disconnect(){
        if($this->conn){
            $this->conn = null;
        }
    }

    public function getOne($query){
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $response = $stmt->fetch();
        return $response;
    }

    public function getAll($query){
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $response = $stmt->fetchAll();
        return $response;
    }



}