<?php

    use Core\Container;

    test('Service Container Testing', function () {
 
        //arrange   
        $container = new Container();
        $container->bind('foo',fn() => 'bar');
        //act
        $result = $container->resolve('foo');
        //assert/expect
        expect($result)->toEqual('bar');
    });


?>
