<?php

  use Core\DB;
  $config = require base_path('config.php');
  $database = new DB($config['database'],'root','12345');

  $notes = $database->query("select * from notes WHERE writerID=2")->get();
  
  view('notes/index.view.php',[
    'title' => 'Notes Page',
    'banner_heading' => 'My Notes',
    'notes' => $notes
  ]);

?>