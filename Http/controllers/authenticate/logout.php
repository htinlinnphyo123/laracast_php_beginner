<?php

    use Core\App;
    use Core\DB;

    $db = App::resolve(DB::class);

    logout();

    $db->query('SELECT * FROM users WHERE id=:id',[
        'id' => $_POST['id']
    ]);

    header('location: /about');



?>