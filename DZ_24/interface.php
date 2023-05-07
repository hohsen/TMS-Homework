<!-- 
Создать интерфейс DocumentInterface, 
который определяет общие методы для всех типов документов, 
а также дополнительный метод process(), 
который будет выводить текст, что данный тип обрабатывается. 
А также getInfo(), который будет выводить массив данных содержащий информацию

Создать класс TextDocument, 
который реализует интерфейс DocumentInterface и содержит специфические методы и параметры для текстовых документов. 
Данный класс должен содержать методы getTitle(), getDescription(), process(), getInfo(), 
а также специфический метод getWordCount().

Создать класс ImageDocument, 
который также реализует интерфейс DocumentInterface и содержит специфические методы и параметры для изображений. 
Данный класс должен содержать методы getTitle(), getDescription(), process(), 
а также специфический метод getDimensions(), getInfo(), в котором будет отображаться ширина и высота видео.

Создать класс VideoDocument, 
который также реализует интерфейс DocumentInterface и содержит специфические методы и параметры для видео. 
Данный класс должен содержать методы getTitle(), getDescription(), process(), getInfo(), 
а также специфический метод getDuration(), в котором будет отображаться длительность видео.

Создать объекты классов TextDocument, ImageDocument и VideoDocument.

Вызвать метод process() на каждом из объектов классов, чтобы обработать соответствующий тип документа.

Получить специфические параметры каждого типа документа, вызвав соответствующие методы классов TextDocument, ImageDocument и VideoDocument.

Опционально: добавить новый тип документа, создав соответствующий класс и реализовав интерфейс DocumentInterface.
-->

<?php

interface DocumentInterface{
    public function getTitle();
    public function getDescription();
    public function process();
    public function getInfo();
}

class TextDocument implements DocumentInterface{
    public string $type;
    public string $title;
    public string $discription;

    public function __construct(string $type, string $title, string $discription,
    ){
        $this->type = $type;
        $this->title = $title;
        $this->discription = $discription;
    }

    public function setType(string $type){
        $this->type = $type;
    }
    public function setTitle(string $title){
        $this->title = $title;
    }
    public function setDescription(string $discription){
        $this->discription = $discription;
    }

    public function getType(){
        return $this->type;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->discription;
    }

    public function getWordCount(){
        return 'Word amount: ' . str_word_count($this->discription, 0);
    }

    public function process(){
        return $this->title . $this->getType() . ' file is processing';
    }

    public function getInfo(){
        return $this->getTitle() . '<br>' . $this->discription . '<br>' . $this->getWordCount();
    }
}

class ImageDocument implements DocumentInterface{
    public string $type;
    public string $title;
    public string $discription;
    public float $hight;
    public float $width;

    public function __construct(string $type, string $title, string $discription, float $hight, float $width,
    ){
        $this->type = $type;
        $this->title = $title;
        $this->discription = $discription;
        $this->hight = $hight;
        $this->width = $width;
    }

    public function setType(string $type){
        $this->type = $type;
    }
    public function setTitle(string $title){
        $this->title = $title;
    }
    public function setDescription(string $discription){
        $this->discription = $discription;
    }
    public function setHight(string $hight){
        $this->hight = $hight;
    }
    public function setWidth(string $width){
        $this->width = $width;
    }

    public function getType(){
        return $this->type;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->discription;
    }
    public function getHight(){
        return $this->hight;
    }
    public function getWidth(){
        return $this->width;
    }

    public function getDimensions(){
        return 'Hight: ' . $this->getHight() . 'px <br> Width: ' . $this->getWidth() . 'px';
    }

    public function process(){
        return $this->title . $this->getType() . ' file is processing';
    }

    public function getInfo(){
        return $this->getTitle() . '<br>' . $this->discription . '<br>' .  $this->getDimensions();
    }
}

class VideoDocument implements DocumentInterface{
    public string $type;
    public string $title;
    public string $discription;
    public float $duration;

    public function __construct(string $type, string $title, string $discription, float $duration
    ){
        $this->type = $type;
        $this->title = $title;
        $this->discription = $discription;
        $this->duration = $duration;
    }

    public function setType(string $type){
        $this->type = $type;
    }
    public function setTitle(string $title){
        $this->title = $title;
    }
    public function setDescription(string $discription){
        $this->discription = $discription;
    }
    public function setDuration(string $duration){
        $this->duration = $duration;
    }

    public function getType(){
        return $this->type;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->discription;
    }

    public function getDuration(){
        return 'Video duration: ' . $this->duration . 'min';
    }

    public function process(){
        return $this->title . $this->getType() . ' file is processing';
    }

    public function getInfo(){
        return $this->getTitle() . '<br>' . $this->discription . '<br>' . $this->getDuration();
    }
}

$textDocument = new TextDocument('.txt', 'Lorem', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia, numquam.');
echo $textDocument->process() . '<br><br>';
echo $textDocument->getWordCount() . '<br><br>';

$imageDocument = new ImageDocument('.jpeg', 'Image', 'Dinosaur', 280, 490);
echo $imageDocument->process() . '<br><br>';
echo $imageDocument->getDimensions() . '<br><br>';

$videoDocument = new VideoDocument('.MOV', 'Video', 'Jurassic park', 127);
echo $videoDocument->process() . '<br><br>';
echo $videoDocument->getDuration() . '<br><br>';
?>