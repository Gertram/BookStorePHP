<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class,'index'])->name('index');
Route::get('/about', [IndexController::class,'about'])->name('about');
Route::get('/contacts', [IndexController::class,'contacts'])->name('contacts');
Route::get('/search', [IndexController::class,'search'])->name('search');
Route::get('/shop', [IndexController::class,'shop'])->name('shop');
Route::get('/orders', [IndexController::class,'orders'])->name('orders');
Route::get('/login', [IndexController::class,'login'])->name('login');
Route::get('/logout', [IndexController::class,'logout'])->name('logout');
Route::get('/my', [IndexController::class,'my'])->name('my');
Route::get('/basket', [IndexController::class,'basket'])->name('basket');
Route::get('/bookmarks', [IndexController::class,'bookmarks'])->name('bookmarks');
Route::get('/authors/{id}', [IndexController::class,'author'])->where(['id'=>'[0-9+]'])->name('author');
Route::get('/shop/{id}', [IndexController::class,'book'])->where(['id'=>'[0-9+]'])->name('book');
