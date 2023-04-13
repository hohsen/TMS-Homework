<?php
// 1. Написать функцию, которая принимает на вход два числа и возвращает их сумму
function calculateSum ($a, $b){
    return $a + $b;
}
echo calculateSum (5, 3);



// 2. Написать функцию, которая принимает на вход строку и возвращает ее длину
function stringLenght($string){
    return strlen($string);
}
echo stringLenght('Hello world');



// 3. Написать функцию, которая принимает на вход массив чисел и возвращает их среднее значение
function calculateArrayAverage($array){
    return array_sum($array) / count($array);
}
echo calculateArrayAverage([5, 9, 2, 4, 14]);



// 4. Написать функцию, которая принимает на вход два числа и определяет, какое из них больше
function biggerNumber ($a, $b){
    if (is_numeric($a) && is_numeric($b)){
        return max($a, $b);
    }
    else{
        return 'Invalid input. Must be number.';
    }
}
echo biggerNumber (4, 3);



// 5. Написать функцию, которая принимает на вход две строки и возвращает их объединение
function stringMerge ($string1, $string2){
    if (is_string($string1) && is_string($string2)){
        return "$string1 $string2";
    }
    else{
        return 'Invalid input. Must be string';
    }
}
echo stringMerge ('Hello', 'world!');



// 6. Написать функцию, которая принимает на вход строку и возвращает ее в верхнем регистре
function textToUpper($string){
    if(is_string($string)){
        return strtoupper($string);
    }
    else{
        return 'Invalid input. Must be string';
    }
}
echo textToUpper ('hello');



// 7. Написать функцию, которая принимает на вход строку и определяет, содержит ли она подстроку
function containsSubstring($string, $substring){
    if(is_string($string)){
        $result = strpos($string, $substring);
        if($result === false){
            return 'Substring not found';
        }
        else{
            return 'There is substring';
        }
    }
    else{
        return 'Invalid input. Must be string.';
    }
}
echo containsSubstring('Hello_world', '_');



// 8. Найти среднее арифметическое двух чи
function calculateAverage ($a, $b){
    return ($a + $b) / 2;
}
echo calculateAverage (4, 5);



// 9. Найти корень квадратный из числа
function calculateSqrt ($num){
    return sqrt($num);
}
echo calculateSqrt (9);
?>