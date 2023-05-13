<?php

    use Core\Response;

    function dd($var){
        var_dump($var);
        die();
    }
    function abort($code = 404){
        http_response_code($code);
        view("$code.php");
        die();
    }
    function activeClass($path){
        return $_SERVER['REQUEST_URI'] === $path ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
    };
    function authorize($condition,$code=Response::FORBIDDEN){
        if(!$condition){
            abort($code);
        }
    }
    function base_path($path) {
        return BASE_PATH . $path;
    }
    function view($path,$attributes=[]) {
        extract($attributes);
        require BASE_PATH . "/views/$path";
    }





?>