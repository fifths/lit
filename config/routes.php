<?php
use Router\Route;

Route::get('/', function () {
    echo 'Hello world!';
});

Route::get('/home', 'HomeController@home');
Route::get('/test', 'HomeController@test');
/*Macaw::error(function () {
    echo '404 :: Not Found';
});*/

Route::$error_callback = function() {

    throw new Exception("路由无匹配项 404 Not Found");

};

Route::dispatch();