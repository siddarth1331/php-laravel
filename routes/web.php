<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HelloSidduController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', [HelloWorldController::class, 'index']);
Route::get('/hello', [HelloSidduController::class, 'index']);
Route::get('/sum/{num1}/{num2}', [CalculatorController::class, 'sum']);
Route::get('/sub/{num1}/{num2}', [CalculatorController::class, 'sub']);
Route::get('/mul/{num1}/{num2}', [CalculatorController::class, 'mul']);
Route::get('/div/{num1}/{num2}', [CalculatorController::class, 'div']);
Route::get('login', [UserController::class, 'login']);
Route::get('register', [UserController::class, 'register']);