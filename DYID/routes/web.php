<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
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

Route::get('/login', [PageController::class, 'loginPage']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [PageController::class, 'logoutPage'])->middleware('auth');
Route::get('/register', [PageController::class, 'registerPage']);
Route::post('/register/insertion', [RegisterController::class, 'insert']);


//guest access
Route::get('/', [PageController::class, 'mainPage']);
Route::get('/mainpage', [PageController::class, 'mainPage']);
Route::get('/productdetail/{id}', [PageController::class, 'productDetailPage']);

//product admin access
Route::get('/manageproduct', [PageController::class, 'manageProductPage'])->middleware('auth');
Route::get('/newproduct', [PageController::class, 'addProductPage'])->middleware('auth');
Route::post('/newproduct/insertion', [ProductController::class, 'insertProduct'])->middleware('auth');
Route::get('/updateproduct/{id}', [PageController::class, 'updateProductPage'])->middleware('auth');
Route::post('/updateproduct/{id}', [ProductController::class, 'updateProduct'])->middleware('auth');
Route::post('/deleteproduct/{id}', [ProductController::class, 'deleteProduct'])->middleware('auth');

//cart
Route::get('/cart', [PageController::class, 'cartPage'])->middleware('auth');
Route::post('/cart/insert/{id}', [CartController::class, 'insertCart'])->middleware('auth');
Route::get('/editcart/{id}', [PageController::class, 'editCartPage'])->middleware('auth');
Route::post('/editcart/{id}', [CartController::class, 'editCart'])->middleware('auth');
Route::post('/deletecart/{id}', [CartController::class, 'deleteCart'])->middleware('auth');


//category
Route::get('/managecategory', [PageController::class, 'manageCategoryPage'])->middleware('auth');
Route::get('/newcategory', [PageController::class, 'addCategoryPage'])->middleware('auth');
Route::post('/newcategory/insertion', [CategoryController::class, 'insertCategory'])->middleware('auth');
Route::get('/updatecategory/{id}', [PageController::class, 'updateCategoryPage'])->middleware('auth');
Route::post('/updatecategory/{id}', [CategoryController::class, 'updateCategory'])->middleware('auth');
Route::post('/deletecategory/{id}', [CategoryController::class, 'deleteCategory'])->middleware('auth');

//history
Route::get('/history', [PageController::class, 'historyPage'])->middleware('auth');
Route::post('/history/insert/{id}', [HistoryController::class, 'insertHistory'])->middleware('auth');
// Route::post(/history);


//searchbar
Route::get('/searchitem', [PageController::class, 'searchItem']);

// Route::resource('/user', UserController::class);
// Route::post('/register', [MemberController::class, 'registerRequest'])->name('registerRequest');



// Route::get('/', function () {
//     return view('mainpage');
// });

Auth::routes();

Route::get('/home', [PageController::class, 'homePage'])->name('home');
