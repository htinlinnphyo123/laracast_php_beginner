<?php

    use Core\DB;
    use Core\Validator;
    use Core\App;
    $database = App::resolve(DB::class);

    $errors = [];
    if(!Validator::string($_POST['title'],3,60)){
        $errors['title'] = 'Title should be between 3 and 60';
    }
    if(empty($errors)){
        try{
            $insert = $database->query(
                "INSERT INTO notes(name,writerID) VALUES(:name, :writerID)", [
                    'name' => $_POST['title'],
                    'writerID' => $_SESSION['user']['id']
                ]
            );
            if($insert){
                header('location: /notes');
                die();
            }
        }catch(PDOException $error){
            $errors['title'] = $error->getMessage();
        }
        
    }

    view('notes/create.view.php',[
        'title' => 'Create Note',
        'banner_heading' => 'Create your own note',
        'errors' => $errors,

    ]);


?>