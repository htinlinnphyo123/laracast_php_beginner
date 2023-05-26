<?php

    use Core\DB;
    use Core\App;

    $database = App::resolve(DB::class);
    $currentUser = $_SESSION['user']['id'];
    $note = $database->query("SELECT * FROM notes WHERE id=:id",['id'=>$_POST['id']])->findOrFail();
    authorize($note['writerID']==$currentUser);
    $delete = $database->query('DELETE FROM notes WHERE id=:id',[
        'id' => $_POST['id']
    ]);
    if($delete){
        header('location: /notes');
    }


?>