<?php

include_once('./Trait/Calculate.php');

class Invoice extends Product{
    
    use Calculate;

    private int $id;
    private string $customer;
    private array $products = [];

    public function __construct(int $id, string $customer, array $products,
    ){
        $this->id = $id;
        $this->customer = $customer;
        $this->products = $products;        
    }

    public function setCustomer(string $customer){
        $this->customer = $customer;
    }
    public function setProducts(array $products){
        $this->products = $products;
    }

    public function getCustomer(){
        return $this->customer;
    }
    public function getProducts(){
        return $this->products;
    }

    function calculateProfit(){
        $invoiceSum = 0;

        foreach($this->products as $orderProduct){
            $invoiceSum += $orderProduct->calculateProfit();
        }

        return $invoiceSum;
    }

    protected function changeCustomer($customer){
        $this->setCustomer($customer);
    }

    public function addProduct(Order $order){
        return $this->products[] = $order;
    }
}

?>