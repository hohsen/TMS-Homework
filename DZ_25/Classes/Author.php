<?php

class Author{

    private int $id;
    private string $last_name;

    public function __construct(int $id, string $last_name,
    ){
        $this->id = $id;
        $this->last_name = $last_name;
    }

    public function setId(int $id){
        $this->id = $id;
    }
    public function setLastName(string $last_name){
        $this->last_name = $last_name;
    }

    public function getId() : int{
        return $this->id;
    }
    public function getLastName() : string{
        return $this->last_name;
    }
}
?>