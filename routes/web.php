<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HelloSidduController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\Auth;
use App\Http\Controllers\User;
use App\Http\Controllers\Hash;
use App\Http\Controllers\Home;






Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', [HelloWorldController::class, 'index']);
Route::get('/siddu', [HelloSidduController::class, 'index']);
Route::get('/sum/{num1}/{num2}', [CalculatorController::class, 'sum']);
Route::get('/sub/{num1}/{num2}', [CalculatorController::class, 'sub']);
Route::get('/mul/{num1}/{num2}', [CalculatorController::class, 'mul']);
Route::get('/div/{num1}/{num2}', [CalculatorController::class, 'div']);
Route::get('login', [UserController::class, 'login']);
Route::get('register', [UserController::class, 'register']);
Route::get('login', [App\Http\Controllers\AuthManager::class, 'login'])->name('login');
Route::get('register', [App\Http\Controllers\AuthManager::class, 'register'])->name('register');
Route::post('login', 'App\Http\Controllers\AuthManager@loginPost')->name('login.post');
Route::post('register', 'App\Http\Controllers\AuthManager@registerPost')->name('register.post');
Route::get('/home', [Home::class, 'index'])->name('home');