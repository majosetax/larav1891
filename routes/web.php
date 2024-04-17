<?php

use App\Http\Controllers\CousinController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\PhraseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;

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


//Route::get('/frmproduct',[ProductController::class,'formularioProducto']);

//Route::post('/productstore',[ProductController::class,'productoStore'])->name('product.store');

//Route::get('/frmproviders',[ProductController::class,'formularioProviders']);

//Route::post('/providerstipe',[ProductController::class,'providersTipe'])->name('form.providers');

Route::get('/frmresults',[ResultController::class,'create']);   

Route::post('/Store',[ResultController::class,'store'])->name('resul.cdtica');


Route::get('/frmcousin',[CousinController::class,'create']);   

Route::post('/storecousin',[CousinController::class,'store'])->name('cousin.store');

//friend

Route::get('/frmfriend',[FriendController::class,'create']);   

Route::post('/storefriend',[FriendController::class,'store'])->name('friend.store');

//frases

Route::get('/frmphrase',[PhraseController::class,'create']);   

Route::post('/storephrase',[PhraseController::class,'store'])->name('phrase.store');