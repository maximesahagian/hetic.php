<?php
namespace Model;

class PageRepository
{
    private $conn;

    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;
    }

    public function getAll(){
        $sql = "SELECT * from ’tkt’";
        $stmt = $this->conn->prepare($sql);
        var_dump($stmt);
    }
}