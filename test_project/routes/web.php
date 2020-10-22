<?php

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
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsrController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\SaleController;

Route::resource('products', ProductController::class);
Route::resource('log', LogController::class);
Route::resource('sales', SaleController::class);
Route::resource('usr', UsrController::class);



Route::get('/', function () {
    return view('welcome');
});
