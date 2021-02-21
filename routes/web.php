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



Auth::routes();
//Backend
Route::middleware('auth')->group( function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin','AdminController@index')->name('admin');
});
Route::middleware('auth')->prefix('backend')->group( function (){
    Route::resource('product','Backend\ProductsController');
});
//Front-end

    Route::get('/', function () {return view('welcome');})->name('welcome');
    Route::get('/product/{id}',[\App\Http\Controllers\Frontend\ProductsController::class,'index','id'])->where(
        ['id']
    )->name('product');
    Route::get('/category/{id}',[\App\Http\Controllers\Frontend\CategoryController::class,'index','id'])->where(
        ['id']
    )->name('category');

