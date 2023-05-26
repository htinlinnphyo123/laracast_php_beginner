<?php

    //database connect
    use Core\DB;
    use Core\App;
    $database = App::resolve(DB::class);

    if(empty($_GET['id'])){
        abort(404);
    }
    //authorize
    $currentUser = $_SESSION['user']['id'];
    $note = $database->query("SELECT * FROM notes WHERE id=:id",['id'=>$_GET['id']])->findOrFail();
    authorize($note['writerID']==$currentUser);

    view('notes/edit.view.php',[
        'title' => 'Create Note',
        'banner_heading' => 'Edit your note',
        'note' => $note
    ]);

