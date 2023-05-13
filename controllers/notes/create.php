<?php

    use Core\DB;
    use Core\Validator;

    $config = require base_path('config.php');
    $database = new DB($config['database'],'root','12345');
    $errors = [];

    if($_SERVER['REQUEST_METHOD']==='POST'){
        if(!Validator::string($_POST['title'],3,60)){
            $errors['title'] = 'Title should be between 3 and 60';
        }
        if(empty($errors)){
            $insert = $database->query(
                "INSERT INTO notes(name,writerID) VALUES(:name, :writerID)", [
                    'name' => $_POST['title'],
                    'writerID' => 2
                ]
            );
            if($insert){
                $insertSuccess = 'Created Your Note Successfully';
            }
            require base_path("controllers/notes/index.php");
            die();
        }

    }
    view('notes/create.view.php',[
        'title' => 'Create Note',
        'banner_heading' => 'Create your own note',
        'errors' => $errors,

    ]);