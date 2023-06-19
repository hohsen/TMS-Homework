<?php
function generatePassword($length) {
    $numbers = '0123456789';
    $lowerCaseLetters = 'abcdefghijklmnopqrstuvwxyz';
    $upperCaseLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters = $numbers . $lowerCaseLetters . $upperCaseLetters;
    $randomString = '';

    $randomString .= $numbers[random_int(0, strlen($numbers) - 1)];
    $randomString .= $lowerCaseLetters[random_int(0, strlen($lowerCaseLetters) - 1)];
    $randomString .= $upperCaseLetters[random_int(0, strlen($upperCaseLetters) - 1)];

    for ($i = 3; $i < $length; $i++) {
        $randomChar = $characters[random_int(0, strlen($characters) - 1)];
        $randomString .= $randomChar;
    }

    $randomString = str_shuffle($randomString);

    return $randomString;
}

$randomString = generatePassword(8);
echo $randomString;

?>