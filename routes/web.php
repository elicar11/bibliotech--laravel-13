<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/connexion', function(){
    return view('auth.signin');
})->name('login');
Route::get('/inscription', function(){
    return view('auth.signup');
})->name('register');
