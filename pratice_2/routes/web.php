<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user/{name}', function ($name) {
    return "Hello " . $name;
})->name('user.greet');
