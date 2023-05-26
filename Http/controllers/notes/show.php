<?php

    use Core\DB;
    use Core\App;

    $database = App::resolve(DB::class);

    $currentUser = $_SESSION['user']['id'];
    if(!isset($_GET)){
        abort(404);
    }else{
        $note = $database->query("SELECT * FROM notes WHERE id=:id",['id'=>$_GET['id']])->findOrFail();
        authorize($note['writerID']==$currentUser);
    
        view('notes/note.view.php',[
            'title' => 'Note Page',
            'banner_heading' => 'Note',
            'note' => $note,
        ]);
    }


?>