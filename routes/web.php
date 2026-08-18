<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Test;
use Illuminate\Support\Facades\Route;

/* VIEW ROUTES */
Route::get('/', [AuthController::class, 'homePage']);
Route::get('/register',  [AuthController::class, 'registerPage'])
    ->name('toRegister');
Route::post('/home', [AuthController::class, 'signinUser']);
Route::post('/sample', [Test::class, 'servePage']);
Route::get('/sample', [Test::class, 'servePage']);

Route::get('/home', function(){
    return view('home');
});

Route::post('logout', [AuthController::class, 'logoutUser']);

/* AUTH ROUTES */
Route::post('/register', [AuthController::class, 'registerUser']);
Route::post('/signin', [AuthController::class, 'loginUser']);