<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome There test friend');
});

Route::get('/hello', function () {
    return 'Hello, World!';
});
