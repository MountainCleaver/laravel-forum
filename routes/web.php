<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Test;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

/* VIEW ROUTES */
Route::get('/', [ViewController::class, 'index']);

Route::get('/home', [ViewController::class, 'toHome'])
    ->name('toHome');
Route::get('/login', [ViewController::class, 'toLogin'])
    ->name('toLogin');
Route::get('/register', [ViewController::class, 'toRegister'])
    ->name('toRegister');

/* AUTH ROUTES */
Route::post('/login', [AuthController::class, 'loginUser']);
Route::post('/register', [AuthController::class, 'registerUser']);
Route::post('logout', [AuthController::class, 'logoutUser']);





Route::get('/sample', function () {
    return view('sample');
});