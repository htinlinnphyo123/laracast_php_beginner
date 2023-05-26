<?php

    use Core\Session;
    
    view("authenticate/login.view.php",[
        'title' => 'Login Page',
        'errors' => Session::get('errors')
    ]);

?>