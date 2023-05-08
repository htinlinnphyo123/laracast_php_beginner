<?php

    class People
    {
        public static $name = 'Htin Linn Phyo';
        public static function sleeping()
        {
            echo  self::$name . ' is sleeping. ';
        }
    }

    People::sleeping();

?>