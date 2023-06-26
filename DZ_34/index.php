<?php

class Order{
    private $orderedItems; 
    private $orderedItemsQuantity;
    private $customer;
    private $shippingAddress;

    public function __construct(
        $orderedItems, 
        $orderedItemsQuantity, 
        $customer, 
        $shippingAddress,
    ){
        $this->orderedItems = $orderedItems;
        $this->orderedItemsQuantity = $orderedItemsQuantity;
        $this->customer = $customer;
        $this->shippingAddress = $shippingAddress;
    }

    public function getOrderedItems(){
        return $this->orderedItems;
    }

    public function getOrderedItemsQuantity(){
        return $this->orderedItemsQuantity;
    }

    public function getCustomer(){
        return $this->customer;
    }

    public function getShippingAddress(){
        return $this->shippingAddress;
    }

}

class OrderTotalPriceCalculator{
    private $order;

    public function __construct($order){
        $this->order = $order;
    }

    public function calculateTotal(){
        // Логика расчета общей стоимости заказа
    }
}

class InvoiceGenerator{
    private $order;

    public function __construct($order){
        $this->order = $order;
    }

    public function generateInvoice(){
        // Логика генерации счета-фактуры
    }
}

class PaymentProcessor{
    private $order;

    public function __construct($order){
        $this->order = $order;
    }

    public function processPayment(){
        // Логика обработки платежа
    }
}

class OrderShipment{
    private $order;

    public function __construct($order){
        $this->order = $order;
    }

    public function shipOrder(){
        // Логика доставки заказа
    }
}

class OredrProcessor{
    private $order;
    private $calculator;
    private $paymentProcessor;
    private $shippment;
    private $invoiceGenerator;

    public function __construct(
        Order $order,
        OrderTotalPriceCalculator $calculator,
        PaymentProcessor $paymentProcessor,
        OrderShipment $shippment,
        InvoiceGenerator $invoiceGenerator,
    ){
        $this->order = $order;
        $this->calculator = $calculator;
        $this->paymentProcessor = $paymentProcessor;
        $this->shippment = $shippment;
        $this->invoiceGenerator = $invoiceGenerator;
    }

    public function processOrder(){
        $totalCost = $this->calculator->calculateTotal();
        $this->paymentProcessor->processPayment();
        $this->shippment->shipOrder();
        $this->invoiceGenerator->generateInvoice();
    }
}
?>