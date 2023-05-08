<?php

include_once('./Trait/Calculate.php');

class Product{

    use Calculate;

    private int $id;
    private string $name;
    private float $price;

    public function __construct(int $id, string $name, float $price
    ){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function setId(int $id){
        $this->id = $id;
    }
    public function setName(string $name){
        $this->name = $name;
    }
    public function setPrice(float $price){
        $this->price = $price;
    }

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }

    function calculateProfit(){
        return $this->getPrice();
    }
}

?>