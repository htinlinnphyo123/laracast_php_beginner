<?php

    use Core\DB;

    $config = require base_path('config.php');
    $database = new DB($config['database'],'root','12345');
    $note = $database->query("SELECT * FROM notes WHERE id=:id",['id'=>$_GET['id']])->findOrFail();

    $currentUser = 2;
    authorize($note['writerID']==$currentUser);

    view('notes/note.view.php',[
        'title' => 'Note Page',
        'banner_heading' => 'Note',
        'note' => $note,
    ]);

?>