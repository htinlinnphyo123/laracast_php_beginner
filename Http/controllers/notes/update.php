<?php

    use Core\DB;
    use Core\Validator;
    use Core\App;
    $database = App::resolve(DB::class);

    //authorize
    $currentUser = $_SESSION['user']['id'];
    $note = $database->query("SELECT * FROM notes WHERE id=:id",['id'=>$_POST['id']])->findOrFail();
    authorize($note['writerID']==$currentUser);
    $errors = [];
    if(!Validator::string($_POST['title'],3,60)){
        $errors['title'] = 'Title should be between 3 and 60';
    }
    if(empty($errors)){
        try{
            $update = $database->query(
                "UPDATE notes SET name=:name WHERE id=:id", [
                    'name' => $_POST['title'],
                    'id' => $_POST['id']
                ]
            );
            if($update){
                header('location: /notes');
                die();
            }
        }catch(PDOException $error){
            // $errors['title'] = $error->getMessage();
            dd($error->getMessage());
        }
        
    }

    view('notes/edit.view.php',[
        'title' => 'Edit Note',
        'banner_heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note

    ]);


?>