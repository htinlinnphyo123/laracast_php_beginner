<?php

    use Core\DB;
    use Core\Container;
    use Core\App;

    $container = new Container;
    $container->bind("Core\DB",function(){
        $config = require base_path('config.php');
        return new DB($config['database'],'root','12345');
    });
    App::setContainer($container);

?>