<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PorductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view("/register", 'register');
Route::POST("/login", [UserController::class, 'login']);
Route::POST("/register", [UserController::class, 'register']);
Route::GET("/", [PorductController::class, 'index']);
Route::GET("detail/{id}", [PorductController::class, 'detail']);
Route::GET("search", [PorductController::class, 'search']);
Route::POST("add_to_cart", [PorductController::class, 'addToCart']);
Route::GET("cartlist", [PorductController::class, 'cartList']);
Route::GET("removecart/{id}", [PorductController::class, 'removeCart']);
Route::GET("ordernow", [PorductController::class, 'orderNow']);
Route::POST("orderplace", [PorductController::class, 'orderPlace']);
Route::GET("myorders", [PorductController::class, 'myOrders']);