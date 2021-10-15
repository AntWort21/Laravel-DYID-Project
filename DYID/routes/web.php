<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Route::get('/register', [MemberController::class, 'viewRegister']);
Route::get('/login', [MemberController::class, 'login']);
Route::post('/register', [MemberController::class, 'registerRequest'])->name('registerRequest');



Route::get('/', function () {
    return view('welcome');
});
