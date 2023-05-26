<?php

  $_SESSION['gender'] = 'male';
  view('contact.view.php',[
    'title' => 'Contact Page',
    'banner_heading' => 'Contact'
  ]);

?>