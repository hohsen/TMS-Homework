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
  // private int $doorAmount;

  private bool $isEngineStarted;


  public function __construct(string $color, bool $isEngineStarted, float $fuelLevel, 
                              float $oilLevel, float $antifreezeLevel, float $batteryLevel,
    ){
      $this->color = ucfirst($color);
      $this->isEngineStarted = $isEngineStarted;
  }


  public function setColor(string $color){
    $this->color = ucfirst($color);
  }
  public function setEngineStarted(bool $isEngineStarted){
    $this->isEngineStarted = $isEngineStarted;
  }


  public function getColor(){
    return $this->color;
  }
  public function getEngineStarted(){
    return $this->isEngineStarted;
  }


  public function startEngine(){
    if($this->isEngineStarted == false){
      $this->setEngineStarted(true);
      echo 'Engine started.<br>';
    }
    else{
      echo 'Engine is already running.<br>';
    }
  }


  public function stopEngine(){
    if($this->isEngineStarted == true){
      $this->setEngineStarted(false);
      echo 'Engine stopped.<br>';
    }
    else{
      echo 'Engine is alredy stopped.<br>';
    }
  }
}



class Car extends Vehicle{

  private string $brand;
  private string $model;

  private int $doorAmount;
  private float $topSpeed;


  public function __construct(string $color, bool $isEngineStarted, float $fuelLevel, 
                              float $oilLevel, float $antifreezeLevel, float $batteryLevel, 
                              string $brand, string $model, int $doorAmount, float $topSpeed,)
{
    parent::__construct($color, $isEngineStarted, $fuelLevel, $oilLevel, $antifreezeLevel, $batteryLevel);

    $this->brand = ucfirst($brand);
    $this->model = ucfirst($model);
    $this->doorAmount = $doorAmount;
    $this->topSpeed = $topSpeed;
}


  public function setBrand(string $brand){
    $this->brand = ucfirst($brand);
  }
  public function setModel(string $model){
    $this->model = ucfirst($model);
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


  public function bodyType(){
    if($this->doorAmount == 2){
      return 'Coupe<br>';
    }
    elseif($this->doorAmount == 3) {
      return 'Hatchback or SUV 3 doord<br>';
    }
    elseif($this->doorAmount == 4){
      return 'Sedan<br>';
    }
    elseif($this->doorAmount == 5){
      return 'Hatchback or SUV 5 doord<br>';
    }
    else{
      return "Well, I didn't think of that :)<br>";
    }
  }


  public function carInfo(){
    return "$this->brand $this->model<br> Top speed: $this->topSpeed km/h<br>" . $this->bodyType();
  }
}

$car = new Car('purple', false, 1, 1, 1, 1, 'honda', 'accord', 2, 209);

echo $car->getColor() . ' ' . $car->carInfo();
echo $car->startEngine();
echo $car->stopEngine();
echo '<br>';



class Motorcycle extends Vehicle{

  private string $brand;
  private string $model;
  private string $type;
  private float $topSpeed;


  public function __construct(string $color, bool $isEngineStarted, float $fuelLevel,
                              float $oilLevel, float $antifreezeLevel, float $batteryLevel,
                              string $brand, string $model, string $type, float $topSpeed,
  ){
    parent::__construct($color, $isEngineStarted, $fuelLevel, $oilLevel, $antifreezeLevel, $batteryLevel,);

    $this->brand = ucfirst($brand);
    $this->model = ucfirst($model);
    $this->type = ucfirst($type);
    $this->topSpeed = $topSpeed;
  }


  public function setBrand(string $brand){
    $this->brand = $brand;
  }
  public function setModel(string $model){
    $this->model = $model;
  }
  public function setType(string $type){
    $this->type = $type;
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
  public function getType(){
    return $this->type;
  }
  public function getTopSpeed(){
    return $this->topSpeed;
  }


  public function motorcycleInfo(){
    return "$this->brand $this->model<br> Type: $this->type<br> Top speed: $this->topSpeed km/h<br>";
  }
}

$motorcycle = new Motorcycle('black', true, 1, 1, 1, 1, 'kawasaki', 'vn1600 classic', 'touring', 165);

echo $motorcycle->getColor() . ' ' . $motorcycle->motorcycleInfo();
echo $motorcycle->startEngine();
echo $motorcycle->stopEngine();
echo '<br>';











// class Engine{

//   private float $fuelLevel;
//   private float $oilLevel;
//   private float $antifreezeLevel;
//   private float $batteryLevel;


//   public function setFuelLevel(float $fuelLevel){
//     $this->fuelLevel = $fuelLevel;
//   }
//   public function setOilLevel(float $oilLevel){
//     $this->oilLevel = $oilLevel;
//   }
//   public function setAntifreezelevel(float $antifreezeLevel){
//     $this->antifreezeLevel = $antifreezeLevel;
//   }
//   public function setBatteryLevel(float $batteryLevel){
//     $this->batteryLevel = $batteryLevel;
//   }


//   public function getFuelLevel(){
//     return $this->fuelLevel;
//   }
//   public function getOilLevel(){
//     return $this->oilLevel;
//   }
//   public function getAntifreezelevel(){
//     return $this->antifreezeLevel;
//   }
//   public function getBatteryLevel(){
//     return $this->batteryLevel;
//   }

// }



?>