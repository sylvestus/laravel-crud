<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/homepage',[ProductController::class,'index'])->name('homepage');
Route::get('/singleProduct/{product}',[ProductController::class,'show']);
Route::get('/editProduct/{product}',[ProductController::class,'edit']);
Route::put('updateProduct/{product}',[ProductController::class,'update']);
Route::delete('/singleProduct/{products}',[ProductsController::class,'destroy'])->name('delete');
Route::get('/addProductform',[ProductController::class,'create']);
Route::post('/addProduct',[ProductController::class,'store']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
