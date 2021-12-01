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
Route::get('/', [PageController::class, 'mainPage']);

//product user access
Route::get('/newproduct', [PageController::class, 'addProductPage']);
Route::post('/newproduct/insertion', [ProductController::class, 'insertProduct']);
Route::get('/productdetail/{id}', [PageController::class, 'productDetailPage']);

//product admin access
Route::get('/manageproduct', [PageController::class, 'manageProductPage']);
Route::get('/updateproduct/{id}', [PageController::class, 'productUpdatePage']);
Route::post('/updateproduct/{id}', [ProductController::class, 'updateProduct']);
Route::post('/deleteproduct/{id}', [ProductController::class, 'deleteProduct']);

//cart
Route::get('/cart', [PageController::class, 'cartPage']);//new
Route::get('/editcart', [PageController::class, 'editCartPage']);//new

//category
Route::get('/editcategory', [PageController::class, 'editCategoryPage']);//new
Route::get('/newcategory', [PageController::class, 'newCategoryPage']);//new
Route::get('/updatecategory', [PageController::class, 'updateCategoryPage']);//new

// Route::resource('/user', UserController::class);
// Route::post('/register', [MemberController::class, 'registerRequest'])->name('registerRequest');



// Route::get('/', function () {
//     return view('mainpage');
// });

Auth::routes();

Route::get('/home', [PageController::class, 'homePage'])->name('home');
