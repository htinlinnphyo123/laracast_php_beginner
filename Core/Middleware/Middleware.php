<?php

    namespace Core\Middleware;

    use Core\Middleware\Auth;
    use Core\Middleware\Guest;

    class Middleware
    {
        const MAP = [
            'guest' => Guest::class,
            'auth' => Auth::class
        ];
        public static function resolve($key)
        {
            if(!$key){
                return;
            }

            $middleware = Static::MAP[$key] ?? false;

            if(!$middleware){
                throw new \Exception('No matching middleware detected');
            }

            (new $middleware)->handle();

        }
    }


?>