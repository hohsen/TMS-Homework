<?php

class User{
    private $tableName = 'users';
    private $db;
    private string $name;

    public function __construct($name, $db){
        $this->name = $name;
        $this->db = $db;
    }
    public function create()
    {
        $query = "INSERT INTO $this->tableName (name) VALUES (:name)";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':name', $this->name);

        $stmt->execute();

        return $stmt;
    }
    public function read() {
        $query = "SELECT * FROM $this->tableName";
        $stmt = $this->db->query($query);

        while($row = $stmt->fetch()){
            echo 'ID: ' . $row['id'] . ', ';
            echo 'Name: ' . $row['name'] . '<br>';
        }
    }
    public function updateName($userId, $userNameNew) {
        $query = "UPDATE $this->tableName SET name = :name WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $userId);
        $stmt->bindParam(':name', $userNameNew);

        $stmt->execute();
    }
    public function deleteById ($userId){
        $query = "DELETE FROM $this->tableName WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $userId);

        $stmt->execute();
    }
}
?>