<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainpageController;
use App\Http\Controllers\NewproductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\EditCartController;
use App\Http\Controllers\ViewProductController;

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

Route::get('/register', [RegisterController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/register/insertion', [RegisterController::class, 'insert']);
Route::get('/mainpage', [MainpageController::class, 'index']);
Route::get('/mainpage/detail', [MainpageController::class, 'detail']);
Route::get('/newproduct', [NewproductController::class, 'index']);
Route::post('/newproduct/insertion', [NewproductController::class, 'insert']);
Route::get('/productdetail', [ProductDetailController::class, 'index']);
Route::get('/productdetail/addcart', [ProductDetailController::class, 'addcart']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/editcart', [EditCartController::class, 'index']);
Route::get('/viewproduct', [ViewProductController::class, 'index']);

// Route::resource('/user', UserController::class);
// Route::post('/register', [MemberController::class, 'registerRequest'])->name('registerRequest');



Route::get('/', function () {
    return view('welcome');
});
