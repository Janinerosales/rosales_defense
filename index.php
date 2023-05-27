<?php

abstract class Database
{
    public $conn;
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbName = "system";

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password);
        
        //$this->conn->query($db);
    }
    abstract public function db(): string;
}
