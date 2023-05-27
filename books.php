<?php

class Books extends Database

{
    public function db():string
    {
        $dbName ="CREATE DATABASE IF NOT EXISTS $this->dbName";
        
        return $this->conn->query($dbName);
    }
}

$new = new Books();
$new->db();

?>