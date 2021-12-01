<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;

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

Route::get('/register', [PageController::class, 'registerPage']);
Route::get('/login', [PageController::class, 'loginPage']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [PageController::class, 'logoutPage']);
Route::post('/register/insertion', [RegisterController::class, 'insert']);
Route::get('/mainpage', [PageController::class, 'mainPage']);

//product
Route::get('/newproduct', [PageController::class, 'addProductPage']);
Route::post('/newproduct/insertion', [ProductController::class, 'insertProduct']);
Route::get('/productdetail', [PageController::class, 'productDetailPage']);
Route::get('/viewproduct', [PageController::class, 'viewProductPage']);

//cart
Route::get('/cart', [PageController::class, 'cartPage']);
Route::get('/editcart', [PageController::class, 'editCartPage']);

//category
Route::get('/editcategory', [PageController::class, 'editCategoryPage']);
Route::get('/newcategory', [PageController::class, 'newCategoryPage']);
Route::get('/updatecategory', [PageController::class, 'updateCategoryPage']);

//history
Route::get('/history', [PageController::class, 'historyPage']);

// Route::resource('/user', UserController::class);
// Route::post('/register', [MemberController::class, 'registerRequest'])->name('registerRequest');



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\PageController::class, 'homePage'])->name('home');
