<?php

    $router->get('/','home.php');
    $router->get('/home','home.php');
    $router->get('/about','about.php');
    $router->get('/contact','contact.php');

    $router->get('/notes','notes/index.php')->only('auth');
    $router->get('/note','notes/show.php')->only('auth');
    $router->get('/notes/create','notes/create.php')->only('auth');
    $router->post('/notes/create','notes/store.php')->only('auth');
    $router->get('/notes/edit','notes/edit.php')->only('auth');
    $router->patch('/notes/update','notes/update.php')->only('auth');
    $router->delete('/notes/delete','notes/delete.php')->only('auth');

    $router->get('/register','authenticate/registerPage.php')->only('guest');
    $router->post('/register','authenticate/register.php')->only('guest');
    $router->get('/login','authenticate/loginPage.php')->only('guest');
    $router->post('/login','authenticate/login.php')->only('guest');
    $router->delete('/logout','authenticate/logout.php')->only('auth');

    
?>