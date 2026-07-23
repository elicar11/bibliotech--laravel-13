<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/connexion',   [UserController::class, 'connexion'])->name('login');
Route::post('/connexion_traitement', [UserController::class, 'connexion_traitement'])->name('loginProcess');
Route::get('/inscription', [UserController::class, 'inscription'])->name('register');
Route::post('/inscription_traitement', [UserController::class, 'inscription_traitement'])->name('registerProcess');

Route::get('/acceuil', function(){
    return view('acceuil');
});
