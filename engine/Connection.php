<?php

class Connection
{
    private $host;
    private $username;
    private $password;
    private $dbName;

    public function __construct()
    {
        $config = require ROOT . '/config/config.php';

        $this->host = $config['host'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->dbName = $config['dbName'];
    }
    public function connection(){
        return new PDO("mysql:host=$this->host;dbname=$this->dbName;", $this->username, $this->password);
    }
    public static function query($sql){
        return (new Connection)->connection()->query($sql);
    }
}