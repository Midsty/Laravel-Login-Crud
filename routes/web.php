<?php

use App\Http\Controllers\ArtiestenController;
use Illuminate\Support\Facades\Route;

Route::get('/artiesten',[ArtiestenController::class, 'index']);
Route::post('/artiesten', [ArtiestenController::class, 'store']);


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

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// verwijst Crud Route 

Route::get('form' , function(){

    return view ('form');
});