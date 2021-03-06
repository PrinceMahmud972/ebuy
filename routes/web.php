<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [ProductController::class, 'index']);

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'save']);


Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [UserController::class, 'login']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::post('/cart', [ProductController::class, 'addToCart']);

Route::get('/cart-list', [ProductController::class, 'cartList']);
Route::get('/remove-cart/{id}', [ProductController::class, 'cartId']);

Route::get('/order', [ProductController::class, 'order']);

Route::post('/order-place', [ProductController::class, 'orderPlace']);

Route::get('/my-orders', [ProductController::class, 'myOrders']);
