<?php

class Database {
    private $dbHost = 'localhost';
    private $dbName = 'dz_31';
    private $dbPassword = '';
    private $dbUser = 'root';
    public $pdo;
    public function connect(){
        try {
            $this->pdo = new PDO("mysql:host=$this->dbHost; dbname=$this->dbName", $this->dbUser, $this->dbPassword);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        return $this->pdo;
    }
}
?>