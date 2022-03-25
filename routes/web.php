<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainPageController ;
use App\Http\Controllers\AuthController ;
use App\Http\Controllers\authmanageController;
use App\Http\Controllers\shop_controller;

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
Route::get('/home', [mainPageController::class ,'index'])->name('home');
Route::get('/', [mainPageController::class ,'index']);
Route::get('/explore',[mainPageController::class,'explore'])-> name('explore');
Route::get('/login',[AuthController::class,'loginPage'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'registerPage'])->name('register');
Route::Post('/register',[AuthController::class,'register'])->name('register');
Route::get('/mypage',[mainPageController::class,'mypage'])->name('MyPage')
->middleware('auth');
Route::get('/cart',[mainPageController::class,'cart'])->name('cart');
Route::post('/mypage',[authmanageController::class,'change'])->name('change');
Route::post('/logout',[authmanageController::class,'logout'])->name('logout');
Route::get('/add-cart/{id}',[authmanageController::class,'addproduct'] )->name('addingproduct');
Route::get('/newshop',[mainPageController::class,'shop'])->name("newshop")
->middleware('auth');
Route::post('/shop',[shop_controller::class,'shopsetup'])-> name('shop');