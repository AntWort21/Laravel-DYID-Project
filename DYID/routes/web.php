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
Route::get('/manageproduct', [PageController::class, 'manageProductPage'])->middleware('admin');
Route::get('/newproduct', [PageController::class, 'addProductPage'])->middleware('admin');
Route::post('/newproduct/insertion', [ProductController::class, 'insertProduct'])->middleware('admin');
Route::get('/updateproduct/{id}', [PageController::class, 'updateProductPage'])->middleware('admin');
Route::post('/updateproduct/{id}', [ProductController::class, 'updateProduct'])->middleware('admin');
Route::post('/deleteproduct/{id}', [ProductController::class, 'deleteProduct'])->middleware('admin');

//cart
Route::get('/cart', [PageController::class, 'cartPage'])->middleware('member');
Route::post('/cart/insert/{id}', [CartController::class, 'insertCart'])->middleware('member');
Route::get('/editcart/{id}', [PageController::class, 'editCartPage'])->middleware('member');
Route::post('/editcart/{id}', [CartController::class, 'editCart'])->middleware('member');
Route::post('/deletecart/{id}', [CartController::class, 'deleteCart'])->middleware('member');


//category
Route::get('/managecategory', [PageController::class, 'manageCategoryPage'])->middleware('admin');
Route::get('/newcategory', [PageController::class, 'addCategoryPage'])->middleware('admin');
Route::post('/newcategory/insertion', [CategoryController::class, 'insertCategory'])->middleware('admin');
Route::get('/updatecategory/{id}', [PageController::class, 'updateCategoryPage'])->middleware('admin');
Route::post('/updatecategory/{id}', [CategoryController::class, 'updateCategory'])->middleware('admin');
Route::post('/deletecategory/{id}', [CategoryController::class, 'deleteCategory'])->middleware('admin');

//history
Route::get('/history', [PageController::class, 'historyPage'])->middleware('member');
Route::post('/history/insert/{id}', [HistoryController::class, 'insertHistory'])->middleware('member');
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
