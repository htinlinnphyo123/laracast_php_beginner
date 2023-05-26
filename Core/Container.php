<?php

    namespace Core;

    class Container
    {
        public $container = [];
        public function bind($key,$resolve)
        {
            $this->container[$key] = $resolve;
        }   
        public function resolve($key)
        {
            if(!array_key_exists($key,$this->container)){
                throw new \Exception("NO matching bound");
            }
            $resolver = $this->container[$key];
            return call_user_func($resolver);
        } 
    }



?>