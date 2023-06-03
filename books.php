<?php
include 'index.php';
class Books extends Database

{
    public $tblName = "books";
    
    public function table()
    {
        $this->connect();
        $create ="CREATE TABLE IF NOT EXISTS $this->$tblname
        (id int primary key auto_increment,
        book_name text,
        author text
        )";
        
     $this->conn->query($create);
    }
    public function insert($bn, $au)
    {
        $in = "INSERT INTO $this->tblname(book_name, author)
        VALUES ('$bn','$au')";
        $this->conn->query($in);
}

?>
