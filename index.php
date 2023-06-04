<?php

class Database
{
    public $conn;
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbName = "system";

    public function __connect()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password);
        
        $create="CREATE DATABASE IF NOT EXISTS $this->dbName";
        $this->conn->query($create);
        $use-"USE $this->dbName";
        $this->conn->query($use);
       
     var_dump($his->conn->error);
       
    }
    
}

