<!-- 

1.  Создайте файл example.txt и запишите в него текст "Hello, world!" с помощью функции fwrite(). 
    Затем откройте этот файл и выведите его содержимое на экран с помощью функции fgets().

2.  Напишите скрипт PHP, который будет открывать файл data.txt в режиме записи и записывать в него данные, 
    которые были введены пользователем в форму на веб-странице. 
    Данные должны быть разделены запятыми. Форма должна содержать поля "Имя", "Фамилия" и "Email". 
    После записи данных в файл, выведите сообщение об успешной записи данных.

3.  Напишите скрипт PHP, который будет открывать файл example.txt в режиме записи и записывать в него 
    случайные числа от 1 до 1000, разделенные пробелами. 
    Запишите в файл 10 случайных чисел. После записи чисел закройте файл. 
    Затем откройте этот файл снова в режиме чтения и выведите на экран сумму всех чисел, которые были записаны в файл. 

-->



<!-- 1 -->

<?php

$fileName = 'example.txt';
$content = 'Hello, world!';

$fo = fopen($fileName, 'w+') or die("Unable to open file!");

fwrite($fo, $content);

fseek($fo, 0); // Возвращаем курсор вначало файла

echo fgets($fo, filesize($fileName) + 1); // Без +1 не читает восклицательный знак

fclose($fo);

?>



<!-- 2 -->

<form action="writeData.php" method="post">
    <p>
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="surname">Фамилия:</label>
        <input type="text" name="surname" id="surname">
    </p>
    <p>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
    </p>
    <button type="submit" name="submit">Submit</button>
</form>



<!-- 3 -->

<?php

$fileName = 'example.txt';

$fo = fopen($fileName, 'w') or die("Unable to open file!");

for ($i=0; $i < 10; $i++) { 
    $randomNumber = random_int(1, 1000);
    fwrite($fo, "$randomNumber ");
}

fclose($fo);

$fo = fopen($fileName, 'r') or die("Unable to open file!");;

if($fo){
    while (($buffer = fgets($fo, filesize($fileName))) !== false) {
        echo array_sum(explode(' ', $buffer));
    }
}

fclose($fo);

?>