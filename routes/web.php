<?php

use App\Http\Controllers\CousinController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\PhraseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\CursoController;
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

//curso

Route::get('/curso/listar',[CursoController::class,'index'])->name('curso.index');;

Route::get('/curso/create',[CursoController::class,'create']);

Route::post('/curso/store',[CursoController::class,'store'])->name('store.curso');

Route::get('/curso/{curso}',[CursoController::class,'show'])->name('curso.show');

Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');
//product

Route::get('/producto/listar',[ProductController::class,'index'])->name('product.index');

Route::get('/producto/create',[ProductController::class,'create']);

Route::post('/producto/store',[ProductController::class,'store'])->name('store.product');