<!-- 
Вы разрабатываете программу для учета продаж в интернет-магазине. 
Вам нужно создать классы Product, Order и Invoice, 
которые будут использоваться для хранения информации о продуктах, заказах и счетах.

Каждый продукт имеет следующие свойства:
id - уникальный идентификатор продукта;
name - наименование продукта;
price - цена продукта.

Класс Product должен содержать абстрактный метод calculateProfit(), 
который будет использоваться для расчета прибыли от продажи продукта. 
Метод должен быть реализован в классах-наследниках Order и Invoice.

Каждый заказ имеет следующие свойства:
id - уникальный идентификатор заказа;
product - продукт, который заказывается;
quantity - количество заказываемого продукта.

Класс Order должен наследовать класс Product и реализовывать метод calculateProfit(), 
который будет возвращать прибыль от продажи продукта в заказе, 
умноженную на количество заказанных единиц продукта.

Каждый счет имеет следующие свойства:
id - уникальный идентификатор счета;
customer - имя покупателя;
products - список продуктов, которые включены в счет и количество каждого продукта.

Класс Invoice также должен наследовать класс Product и реализовывать метод calculateProfit(), 
который будет возвращать общую прибыль от продажи всех продуктов в счете, 
умноженную на количество заказанных единиц каждого продукта.

В классе Invoice должен быть метод addProduct(), 
который добавляет продукт в список продуктов в счете с указанием количества заказываемых единиц продукта.

В классах Order и Invoice должны быть методы 
для изменения количества заказываемых единиц продукта и изменения имени покупателя соответственно. 
-->

<?php

trait Calculate{
    abstract function calculateProfit();
}

class Product{

    use Calculate;

    public int $id;
    public string $name;
    public float $price;

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

class Order extends Product{

    use Calculate;

    public int $id;
    public Product $product;
    public int $quantity;

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

class Invoice extends Product{
    
    use Calculate;

    public int $id;
    public string $customer;
    public array $products = [];

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

    public function changeCustomer($customer){
        $this->setCustomer($customer);
    }

    public function addProduct(Order $order){
        return $this->products[] = $order;
    }
}

$product1 = new Product(1, 'Paper', 1.85);
$product2 = new Product(2, 'Apple', 0.99);
$product3 = new Product(3, 'Pen', 4.5);

$order1 = new Order(1, $product1, 5);
$order2 = new Order(2, $product2, 2);
$order3 = new Order(3, $product3, 3);

$invoice1 = new Invoice(1, 'Bob', [$order1, $order2,]);

// echo $product1->calculateProfit() . '<br>';
// echo $order1->calculateProfit() . '<br>';
// echo $invoice1->calculateProfit() . '<br>';

// echo '<br> <pre>';
// print_r($invoice1->addProduct($order3));
// echo '</pre> <br>';

// echo '<pre>';
// print_r($invoice1);
// echo '</pre>';

?>