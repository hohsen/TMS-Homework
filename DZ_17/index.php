<?php

// Каждый студент должен взять любые две функции связанные с массивами и изучить ее так, 
// чтобы можно было легко ее объяснить и показать минимум два примера ее использования (по каждой функции). 
// Для закрепления!




// // array_diff

// // Сравнивает array с одним или несколькими другими массивами и возвращает массив со значения из array, 
// // которые отсутствуют во всех других массивах.

// // array_diff(сравниваемый массив, массив с которыми сравниваем, массив с которыми сравниваем, и т.д.);



// $array1 = array("key1" => "orange", "yellow", "blue", "red");
// $array2 = array("key2" => "green", "yellow", "red");

// $result = array_diff($array1, $array2);

// print_r($result);



// $array1 = array("key1" => "orange", "yellow", "blue", "red");
// $array2 = array("key2" => "green", "yellow", "red");

// $array3 = array("key3" => "orange", "b", "c");
// $result = array_diff($array3, $array1, $array2);

// print_r($result);



// $array1 = array("key1" => 100, 200, 300, 400);
// $array2 = array("key2" => 100, 200, 300);

// $result = array_diff($array1, $array2);

// print_r($result);



// $array1 = array("key1" => 'green', 200, 'orange', 400);
// $array2 = array("key2" => 'red', 'orange', 300);

// $result = array_diff($array1, $array2);

// print_r($result);












// function key_compare_func($key1, $key2)
// {
//     if ($key1 == $key2)
//         return 0;
//     else if ($key1 > $key2)
//         return 1;
//     else
//         return -1;
// }

// $array1 = array('5'  => 1, '2'  => 2, 'green'  => 3, 'purple' => 4);
// $array2 = array(5 => 5, 'blue' => 6, 'green' => 7, '3'   => 8);

// print_r(array_diff_ukey($array1, $array2, 'key_compare_func'));








// // array_pad

// // array_pad($array, $lenght, $value);

// // Функция array_pad() возвращает копию массива array, дополненного до размера length элементами со значением value. 
// // Если параметр length положителен, то массив увеличивается вправо, если отрицателен - влево. 
// // Если абсолютное значение параметра length меньше или равно размеру массива array, функция не производит никаких операций. 
// // За один раз возможно добавить максимум 1048576 элементов.

// // Возвращает копию array, дополненного до размера указанного length значением value. 
// // Если параметр length положителен, то массив дополняется вправо, если он отрицателен - влево. 
// // Если абсолютное значение length меньше либо равно длине array, то дополнение не происходит.


// $array1 = [1, 2 ,3 , 4, 5];
// $result = array_pad($array1, 7, 'new element');

// print_r($result);


// $array1 = [1, 2 ,3 , 4, 5];
// $result = array_pad($array1, -7, 'new element');

// print_r($result);


?>