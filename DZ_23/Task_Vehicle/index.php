<!-- 

Допустим, у нас есть несколько классов: Vehicle, Car и Motorcycle.

— Vehicle - базовый класс, который определяет общие свойства и методы для всех транспортных средств.
— Car - класс автомобилей, наследуется от Vehicle и имеет свойства и методы, 
  специфичные для автомобилей (например, количество дверей, максимальная скорость).
— Motorcycle - класс мотоциклов, наследуется от Vehicle и имеет свойства и методы, 
  специфичные для мотоциклов (например, тип мотоцикла, максимальная скорость).

Задача заключается в том, чтобы создать систему, 
которая будет моделировать использование различных видов транспорта. 
Например, мы можем создать объекты Car и Motorcycle и использовать методы start() и stop() для 
моделирования запуска и остановки двигателя.

Также можно добавить дополнительные классы, такие как Truck, Bus и Bicycle, 
которые будут определять различные виды транспорта и их свойства, 
и будут использоваться для различных целей в системе. 
Например, класс Bicycle может иметь методы для моделирования торможения и тд.

-->

<?php 

class Vehicle{

  private string $color;

  private float $fuelLevel;
  private float $oilLevel;
  private float $antifreezeLevel;
  private float $batteryLevel;

  private bool $isEngineStarted;


  public function __construct(
    string $color, 
    bool $isEngineStarted, 
    float $fuelLevel, 
    float $oilLevel, 
    float $antifreezeLevel, 
    float $batteryLevel,
    ){
      $this->color = $color;
      $this->isEngineStarted = $isEngineStarted;
      $this->fuelLevel = $fuelLevel;
      $this->oilLevel = $oilLevel;
      $this->antifreezeLevel = $antifreezeLevel;
      $this->batteryLevel = $batteryLevel;
  }


  public function setColor(string $color){
    $this->color = $color;
  }
  public function setEngineStarted(bool $isEngineStarted){
    $this->isEngineStarted = $isEngineStarted;
  }
  public function setFuelLevel(float $fuelLevel){
    $this->fuelLevel = $fuelLevel;
  }
  public function setOilLevel(float $oilLevel){
    $this->oilLevel = $oilLevel;
  }
  public function setAntifreezelevel(float $antifreezeLevel){
    $this->antifreezeLevel = $antifreezeLevel;
  }
  public function setBatteryLevel(float $batteryLevel){
    $this->batteryLevel = $batteryLevel;
  }


  public function getColor(){
    return $this->color;
  }
  public function getEngineStarted(){
    return $this->isEngineStarted;
  }
  public function getFuelLevel(){
    return $this->fuelLevel;
  }
  public function getOilLevel(){
    return $this->oilLevel;
  }
  public function getAntifreezelevel(){
    return $this->antifreezeLevel;
  }
  public function getBatteryLevel(){
    return $this->batteryLevel;
  }


  public function startEngine(){
    if($this->isEngineStarted == true && $this->fuelLevel > 0 && $this->batteryLevel > 0){
      echo 'Engine is already running<br>';
    }
    else{
      if($this->fuelLevel > 0 && $this->oilLevel > 0 && $this->antifreezeLevel > 0 && $this->batteryLevel > 0){
        $this->setEngineStarted(true);
        echo 'Engine strted<br>';
      }
      else{
        echo "Can't start the engine<br>";
      }
    }
  }


  public function stopEngine(){
    if($this->isEngineStarted == true){
      $this->setEngineStarted(false);
      echo 'Engine stopped<br>';
    }
    else{
      echo 'Engine is alredy stopped<br>';
    }
  }
}

// $vehicle = new Vehicle('green', false, 1, 1, 1, 1);

// echo $vehicle->startEngine();
// echo $vehicle->stopEngine();


class Car extends Vehicle{

  private string $brand;
  private string $model;

  private int $doorAmount;
  private float $topSpeed;

  
  public function __counstruct(
    string $brand,
    string $model,
    int $doorAmount,
    float $topSpeed,
    string $color, 
    bool $isEngineStarted, 
    float $fuelLevel, 
    float $oilLevel, 
    float $antifreezeLevel, 
    float $batteryLevel,
  ){
    parent::__construct($color, $isEngineStarted, $fuelLevel, $oilLevel, $antifreezeLevel, $batteryLevel,);
    $this->brand = $brand;
    $this->model = $model;
    $this->doorAmount = $doorAmount;
    $this->topSpeed = $topSpeed;
  }
  


  public function setBrand(string $brand){
    $this->brand = $brand;
  }
  public function setModel(string $model){
    $this->model = $model;
  }
  public function setDoorAmount(int $doorAmount){
    $this->doorAmount = $doorAmount;
  }
  public function setTopSpeed(float $topSpeed){
    $this->topSpeed = $topSpeed;
  }


  public function getBrand(){
    return $this->brand;
  }
  public function getModel(){
    return $this->model;
  }
  public function getDoorAmount(){
    return $this->doorAmount;
  }
  public function getTopSpeed(){
    return $this->topSpeed;
  }
}

$car = new Car();

// echo $car->startEngine();
// echo $car->stopEngine();

class Motorcycle extends Vehicle{

  private $brand;
  private $model;
  private $topSpeed;

}











