<?php

    use Core\Authenticator;
    use Http\Forms\LoginForm;

    //to check validation for email and password
    $loginform = LoginForm::validate($attributes = [
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ]);    

    //check email and password match
    $signIn = (new Authenticator)->attempt($attributes['email'],$attributes['password']);
    if(!$signIn){
        $loginform->setError('not_match','No matching email and password')->throw();
    }

    return redirect('/notes');

?>