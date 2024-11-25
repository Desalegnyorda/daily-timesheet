<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/Hello', function () {
    return view('welcome');
});
=======
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Laravel!';
});
>>>>>>> 20ad7c550b36590391adfdc7803098ef289f1ab8
