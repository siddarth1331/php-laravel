<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HelloSidduController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Home;
use App\Http\Controllers\ProductsManager;
use App\Http\Controllers\CategoriesManager;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', [App\Http\Controllers\HelloWorldController::class, 'index']);
Route::get('/siddu', [App\Http\Controllers\HelloSidduController::class, 'index']);

Route::get('/sum/{num1}/{num2}', [App\Http\Controllers\CalculatorController::class, 'sum']);
Route::get('/sub/{num1}/{num2}', [App\Http\Controllers\CalculatorController::class, 'sub']);
Route::get('/mul/{num1}/{num2}', [App\Http\Controllers\CalculatorController::class, 'mul']);
Route::get('/div/{num1}/{num2}', [App\Http\Controllers\CalculatorController::class, 'div']);
Route::get('login', [App\Http\Controllers\AuthManager::class, 'login'])->name('login');
Route::get('register', [App\Http\Controllers\AuthManager::class, 'register'])->name('register');

Route::post('login', 'App\Http\Controllers\AuthManager@loginPost')->name('login.post');
Route::post('register', 'App\Http\Controllers\AuthManager@registerPost')->name('register.post');
Route::get('/home', [Home::class, 'index'])->name('home');
Route::get('logout', [App\Http\Controllers\AuthManager::class, 'logout'])->name('logout');
Route::get('/products', [App\Http\Controllers\ProductsManager::class, 'products'])->name('products');
Route::get('/categories', [App\Http\Controllers\CategoriesManager::class, 'categories'])->name('categories');

