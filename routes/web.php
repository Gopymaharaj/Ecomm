<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});
Route::view('/login','login');
Route::view('register','register');
Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'login']);
Route::get('product',[ProductController::class,'index']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::get('search',[ProductController::class,'search']);
Route::post('add_to_cart',[ProductController::class,'addtocart']);
Route::post('orderdirect',[ProductController::class,'orderdirect']);
Route::get('cartlist',[ProductController::class,'Cartlist']);
Route::get('removeitem/{id}',[ProductController::class,'removeitem']);
Route::get('order',[ProductController::class,'order']);
Route::post('orderplace',[ProductController::class,'orderplace']);
Route::get('orderhistroy',[ProductController::class,'orderhistroy']);
Route::get('ordercancel/{id}',[ProductController::class,'ordercancel']);
Route::view('profile','profile');
Route::view('/wallet','wallet');
Route::post('qty',[ProductController::class,'qty']);
Route::view('forget','forget');
Route::post('forgetpassword',[UserController::class,'forget']);
Route::view('changepassword','changepassword');
Route::post('changepassword',[UserController::class,'changepassword']);