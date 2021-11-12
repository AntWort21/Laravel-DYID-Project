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
use App\Http\Controllers\ProductController;

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

//product
Route::get('/newproduct', [ProductController::class, 'addProductPage']);
Route::post('/newproduct/insertion', [ProductController::class, 'insertProduct']);
Route::get('/productdetail', [ProductController::class, 'productDetailPage']);

//cart
Route::get('/cart', [CartController::class, 'index']);
Route::get('/editcart', [EditCartController::class, 'index']);

// Route::resource('/user', UserController::class);
// Route::post('/register', [MemberController::class, 'registerRequest'])->name('registerRequest');



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
