<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('Homepage');
});

Route::get('/user/{name}', function ($name) {
    return "Welcome, " . $name;
})->name('user.welcome');

Route::get('/user1/{id}', function ($id) {
    return "User ID: " . $id;
})->where('id', '[0-9]+');
