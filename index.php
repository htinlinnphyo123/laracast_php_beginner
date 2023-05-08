<?php 

    require('function.php');
    // require "route.php";

    require "database.php";
    
    $config = require('config.php');
    
    $id = $_GET['id'];
    $database = new DB($config['database'],'root','12345');
    $query = "select * from students where id=:id";
    // dd($query);
    $students = $database->query($query,[':id'=>$id])->fetch();
    var_dump($students);
?>

<!-- http://localhost:8000/?id=5;update students set name='susu update' where id=5-->