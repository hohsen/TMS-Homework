<?php

function validate_text($fieldName){
    return  isset($_POST[$fieldName]) && !empty(trim($_POST[$fieldName])) ? $_POST[$fieldName] : false;
}

function validate_email($fieldName){
    return filter_var($_POST[$fieldName], FILTER_VALIDATE_EMAIL) ? $_POST[$fieldName] : false;
}

function validate_checkbox($fieldName){
    return isset($_POST[$fieldName]) ? $_POST[$fieldName] : false;
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = validate_text('username');
    $surname = validate_text('surname');
    $email = validate_email('email');
    $checkbox = validate_checkbox('checkbox');

    $errors = [];

    if($username == false){
        $errors[] = 'Username must be filled';
    }

    if($surname == false){
        $errors[] = 'Surname must be filled';
    }

    if($email == false){
        $errors[] = 'Email must be filled';
    }

    if($checkbox == false){
        $errors[] = 'Must accept checkbox';
    }

    if(!empty($errors)){
        foreach($errors as $error){
            echo $error . '<br />';
        };
    }
}