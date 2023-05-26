<?php

  use Core\App;
  use Core\DB;
  
  $database = App::resolve(DB::class);
  $notes = $database->query("select * from notes WHERE writerID=:id",['id'=>$_SESSION['user']['id']])->get();
  
  view('notes/index.view.php',[
    'title' => 'Notes Page',
    'banner_heading' => 'My Notes',
    'notes' => $notes
  ]);

?>