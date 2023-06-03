<?php
include 'index.php';
class Books extends Database

{
    public $tblName = "books";
    
    public function createTable()
    {
        $this->construct();
        $tbl ="CREATE TABLE IF NOT EXISTS $this->$tblName
        (id int auto_increment primary key,
        book_name text,
        author text)";
     $this->conn->query($tbl);
     var_dump($this->conn-error);
    }
}

?>
