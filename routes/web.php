<?php

use App\Models\Document;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;


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
/*
Route::get('/', function () {
    return view('welcome');
});*


/*Route::get ('/', function(){
    return view('home');
});*/
Route::get('pages', [HomeController::class,'index'])->name('index');
Route::post('store',[HomeController::class,'store'])->name('store');
route::get('resultssearch',[SearchController::class, 'index'])->name('search');
route::get('voirdocs',[HomeController::class,'voir'])->name('voir');
route::post('resultssearch',[SearchController::class,'search'])->name('search');
