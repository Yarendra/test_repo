<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = ['name' => 'John', 'age' => 30];
    // if ($data['age'] > 18) {
    //     $data['status'] = 'adult';
    // } else {
    //     $data['status'] = 'minor';
    // }
    return view('welcome There test friend');
});

Route::get('/hello', function () {
     $data = ['name' => 'John', 'age' => 30];
    // if ($data['age'] > 18) {
    //     $data['status'] = 'adult';
    // } else {
    //     $data['status'] = 'minor';
    // }
    return 'Hello, World! third test hell ';
});

