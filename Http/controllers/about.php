<?php

    $email = $_SESSION['user']['email'] ?? 'Guest';
    view('about.view.php',[
        'title' => 'About Page',
        'banner_heading' => 'Hello ' . $email
    ]);

?>