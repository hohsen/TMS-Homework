<?php 

function validate_text($fieldName) {
    return  isset($_POST[$fieldName]) && !empty(trim($_POST[$fieldName])) ? $_POST[$fieldName] : false;
}

function validate_email($fieldName) {
    return filter_var($_POST[$fieldName], FILTER_VALIDATE_EMAIL) ? $_POST[$fieldName] : false;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = validate_text('name');
    $surname = validate_text('surname');
    $email = validate_email('email');

    $fileName = 'data.txt';
    $formData = "$name, $surname, $email";

    $fo = fopen($fileName, 'w') or die("Unable to open file!");

    if (is_writable($fileName)) {

        if (!fwrite($fo, $formData)) {
            echo "cant write in the $fileName";
            exit;
        }
    
        echo 'Данные записаны';
    }
}

fclose($fo);

?>