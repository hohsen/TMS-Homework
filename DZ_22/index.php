<!-- 
1.  Создать класс "Студент", у которого есть поля "имя", "фамилия", "возраст", "курс".

1.1 Конструктор класса, который принимает значения для всех полей и устанавливает их соответствующим образом.
1.2 Методы для получения значений полей (геттеры)
1.3 Методы для установки значений полей (сеттеры)
1.4 Методы для вывода информации о студенте
1.5 Вывести всю информацию


2.  Создать класс "Автомобиль", у которого есть поля "марка", "модель", "цвет", "год выпуска"

2.1 Конструктор класса, который принимает значения для всех полей и устанавливает их соответствующим образом.
2.2 Методы для получения значений полей (геттеры)
2.3 Методы для установки значений полей (сеттеры)
2.4 Методы для вывода информации об автомобиле


3.  Создать класс "Круг", у которого есть поле "радиус".

3.1 Конструктор класса, который принимает значение радиуса и устанавливает его соответствующим образом.
3.4 Метод для вычисления площади круга - calculateArea()


4.  Создать класс "Человек", у которого есть поля "имя", "возраст", "пол".
    Написать методы для работы с этими полями:

4.1 Конструктор класса, который принимает значения для всех полей и устанавливает их соответствующим образом.
4.2 Метод для проверки, является ли человек совершеннолетним - isAdult(), 
    который возвращает true, если возраст человека больше или равен 18, и false в противном случае. 

-->



<!-- 1 -->

<?php

class Student{

    public $name;
    public $surname;
    public $age;
    public $course;

    public function __construct($name, $surname, $age, $course){
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->course = $course;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function setSurname($surname){
        $this->surname = $surname;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function setCourse($course){
        $this->course = $course;
    }

    public function getName(){
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getAge(){
        return $this->age;
    }
    public function getCourse(){
        return $this->course;
    }
}

$student = new Student('Алексей', 'Берёзкин', 20, 1);

echo $student->getName() . ' ';
echo $student->getSurname() . ', ';
echo $student->getAge() . ' лет, ';
echo $student->getCourse() . ' курс.';
echo '<br>';
echo '<br>';

?>



<!-- 2 -->

<?php

class Auto{

    public $brand;
    public $model;
    public $color;
    public $year;

    public function __construct($brand, $model, $color, $year){
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;
    }

    public function setBrand($brand){
        $this->brand = $brand;
    }
    public function setModel($model){
        $this->model = $model;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function setYear($year){
        $this->year = $year;
    }

    public function getBrand(){
        return $this->brand;
    }
    public function getModel(){
        return $this->model;
    }
    public function getColor(){
        return $this->color;
    }
    public function getYear(){
        return $this->year;
    }
}

$student = new Auto('Honda', 'Accord', 'Филетовый', 2007);

echo $student->getBrand() . ' ';
echo $student->getModel() . ', ';
echo $student->getColor() . ', ';
echo $student->getYear() . '.';
echo '<br>';
echo '<br>';

?>



<!-- 3 -->
<?php

class Circle {

    public $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function calculateArea(){
        return $this->radius**2 * 3.14;
    }


}

$circle = new Circle(10);

echo $circle->calculateArea();
echo '<br>';
echo '<br>';

?>



<!-- 4 -->

<?php

class Human{

    public $name;
    public $age;
    public $gender;

    public function __construct($name, $age, $gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function isAdult(){
        if ($this->age >= 18) {
            return 'Adult';
        }
        else{
            return 'Child';
        }
    }




}

$human = new Human('Маркус', 15, 'М');

echo $human->isAdult();

?>
