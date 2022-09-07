<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\CategoryController;
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

Route::middleware('auth')->group(function(){

    //wallet routes
    route::controller(WalletController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/wallet/create','create')->name('wallet.create');
        Route::post('/wallet/create','store');
    });

    //transaction routes
    Route::controller(TransactionController::class)->group(function(){
        Route::get('/transaction/create', 'create')->name("transaction.create");
        Route::post('/transaction/create', 'store');
    });

    //category routes
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/category/index','index')->name('category.index');
        Route::get('/category/create','create')->name('category.create');
        Route::post('/category/create','store');
    });

});

//login routes
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'authenticate']);

//create user routes
Route::get('login/create',[LoginController::class,'create'])->name('login.create');
Route::post('/login/create',[LoginController::class,'store']);