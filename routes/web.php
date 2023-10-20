<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscountController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//dashboard

Route::get('/dashboard',[DiscountController::class,'index']);
Route::get('/create',[DiscountController::class,'create']);
Route::post('/store',[DiscountController::class,'store']);
Route::get('/show/{id}',[DiscountController::class,'show']);
Route::get('/delete/{id}',[DiscountController::class,'destroy']);
