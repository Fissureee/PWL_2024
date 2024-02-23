<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});
   
Route::get('/welcome', function() {
    return 'Welcome to my website!';
});

Route::get('/about', function() {
    return 'NIM:224172xxxx <br/> Name: Steven';
});