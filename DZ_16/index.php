<?php

// 1. Создание функции-счетчика (без использования static). 
// Каждый вызов функции +1 к исходному результату от начального значения функции. 
// Использовать только замыкание и начальное значение переменной.
// Какой вариант больше под условия задачи?
function counter(){
    $num = 0;
    return function() use(&$num){
        return $num++;
    };
}

$closure = counter();

echo $closure();
echo $closure();
echo $closure();
echo $closure();



// 2. Создать замыкание для генератора случайных чисел в заданном диапазоне в передаваемых аргументах ($min, $max).
function random_number_generator(){
    $min = 1;
    $max = 5;
    return function() use(&$min, &$max){
        return rand($min, $max);
    };
}
$closure = random_number_generator();
echo $closure();
?>