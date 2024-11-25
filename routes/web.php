<?php

use Illuminate\Support\Facades\Route;


Route::get('/Hello', function () {
    return view('welcome');
});

