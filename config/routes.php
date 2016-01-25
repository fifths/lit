<?php
use \NoahBuscher\Macaw\Macaw;

Macaw::get('/', function () {
    echo 'Hello world!';
});

Macaw::get('/home', 'HomeController@home');
Macaw::get('/test', 'HomeController@test');
/*Macaw::error(function () {
    echo '404 :: Not Found';
});*/

Macaw::$error_callback = function() {

    throw new Exception("路由无匹配项 404 Not Found");

};

Macaw::dispatch();