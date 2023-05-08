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

include_once('./Interface/DocumentInterface.php');
include_once('./Class/TextDocument.php');
include_once('./Class/ImageDocument.php');
include_once('./Class/VideoDocument.php');

$textDocument = new TextDocument('.txt', 'Lorem', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia, numquam.');
echo $textDocument->process() . '<br><br>';
// echo $textDocument->getWordCount() . '<br><br>';

echo'<pre>';
print_r($textDocument->getInfo());
echo'</pre>';

$imageDocument = new ImageDocument('.jpeg', 'Image', 'Dinosaur', 280, 490);
echo $imageDocument->process() . '<br><br>';
// echo $imageDocument->getDimensions() . '<br><br>';

echo'<pre>';
print_r($imageDocument->getInfo());
echo'</pre>';

$videoDocument = new VideoDocument('.MOV', 'Video', 'Jurassic park', 127);
echo $videoDocument->process() . '<br><br>';
// echo $videoDocument->getDuration() . '<br><br>';

echo'<pre>';
print_r($videoDocument->getInfo());
echo'</pre>';

?>