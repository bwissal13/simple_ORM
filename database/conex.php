<?php


class Conex {
  private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=task_db;charset:utf8mb4", 'root', '');
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed:" . $e->getMessage());
        }

        return $this->conn;
    } 

    public function getConnection() {
        return $this->conn;
    }

    public function __destruct() {
        $this->conn = null;
    }
    
}
