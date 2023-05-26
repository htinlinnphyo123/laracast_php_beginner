<?php

    use Http\Forms\Register;
    $errors = [];

    $register = new Register();
    if($register->validate($_POST['email'],$_POST['password'])){
        if($register->createAccount($_POST['email'],$_POST['password'])){
            header("location: /notes");
            exit();
        }else{
            $errors = $register->getErrors();
        }
    }else{
        $errors = $register->getErrors();
    }

    view("authenticate/register.view.php",[
        'title' => 'Register Page',
        'errors' => $errors
    ]);