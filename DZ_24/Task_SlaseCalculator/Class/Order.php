<?php

include_once('./Trait/Calculate.php');

class Order extends Product{

    use Calculate;

    private int $id;
    private Product $product;
    private int $quantity;

    public function __construct(int $id, Product $product, int $quantity,
    ){
        $this->id = $id;
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function setProduct(Product $product){
        $this->product = $product;
    }
    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getProduct(){
        return $this->product;
    }
    public function getQuantity(){
        return $this->quantity;
    }

    public function changeQuantity(int $quantity){
        $this->setQuantity($quantity);
    }

    function calculateProfit(){
        return $this->quantity * $this->product->getPrice();
    }

}

?>