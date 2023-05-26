<?php

    use Illuminate\Support\Collection;

    require __DIR__ . "/../vendor/autoload.php";

    $array = new Collection([
        0,1,2,3,4,5,6,7,8,9
    ]);

    $dividedBytwo = $array->filter(function($num){
        return $num % 2 == 0;
    });

    die(var_dump($dividedBytwo));
    

?>