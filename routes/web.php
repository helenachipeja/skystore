<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/cart', [IndexController::class, 'cart'])->name('cart');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::get('/checkout', [IndexController::class, 'checkout'])->name('checkout');
Route::get('/detail', [IndexController::class, 'detail'])->name('detail');
Route::get('/shop', [IndexController::class, 'shop'])->name('shop');
