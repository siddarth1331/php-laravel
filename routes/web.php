<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HelloSidduController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\Home;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ProductsManager;
use App\Http\Controllers\CategoriesManager;
use App\Http\Controllers\CartManager;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', [HelloWorldController::class, 'index']);
Route::get('/siddu', [HelloSidduController::class, 'index']);

Route::get('/sum/{num1}/{num2}', [CalculatorController::class, 'sum']);
Route::get('/sub/{num1}/{num2}', [CalculatorController::class, 'sub']);
Route::get('/mul/{num1}/{num2}', [CalculatorController::class, 'mul']);
Route::get('/div/{num1}/{num2}', [CalculatorController::class, 'div']);

Route::get('login', [AuthManager::class, 'login'])->name('login');
Route::get('register', [AuthManager::class, 'register'])->name('register');
Route::post('login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::post('register', [AuthManager::class, 'registerPost'])->name('register.post');
Route::get('/home', [Home::class, 'index'])->name('home');
Route::get('logout', [AuthManager::class, 'logout'])->name('logout');
Route::get('/products', [ProductsManager::class, 'products'])->name('products');
Route::get('/categories', [CategoriesManager::class, 'categories'])->name('categories');
Route::get('product/{slug}', [ProductsManager::class, 'show'])->name('products.details');
Route::middleware('auth')->group(function () {
    Route::get('cart/{id}', [ProductsManager::class, 'addToCart'])->name('cart.add');
    Route::get('cart', [CartManager::class, 'cart'])->name('cart');
});