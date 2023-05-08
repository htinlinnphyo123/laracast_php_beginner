<?php 

    // require('function.php');

    // require "route.php";

    class DB
    {   
        public $connection;
        public function __construct()
        {
            $dsn = "mysql:host=localhost;port=3306;dbname=school";
            $this->connection = new PDO($dsn,'root','12345');
        }
        public function query($query)
        {
            $statement = $this->connection->prepare($query);
            $statement->execute();
            return $statement;
        }
    }

    $database = new DB();
    $students = $database->query("select * from students")->fetchAll(PDO::FETCH_ASSOC);
    var_dump($students);

    $eachStudent = $database->query("select * from students where id=3")->fetch(PDO::FETCH_ASSOC);
    var_dump($eachStudent);


?>