<?php


class Database
{
    private $host;
    private $user;
    private $password;
    private $baseName;
    private $connect;

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
        $this->connect = mysqli_connect($this->host, $this->user, $this->password, $this->baseName);
    }

    public function disconnect(){
        $this->connect = mysqli_close($this->connect);
    }

    public function getAll($query){
        $query = mysqli_query($this->connect,$query);
        $arr = [];
        while ($result = mysqli_fetch_assoc($query)){
            $arr[] = $result;
        }
        return $arr;
    }



}