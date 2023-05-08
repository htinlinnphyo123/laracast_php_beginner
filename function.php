<?php

    $activeClass = function($path){
        return $_SERVER['REQUEST_URI'] === $path ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
    };

    function dd($var){
        var_dump($var);
        die();
    }

?>