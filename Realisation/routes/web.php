<?php

use App\Http\Controllers\ApprenantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BriefController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\AssignerController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\searchController;

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

Route::resource('/brief',BriefController::class);

Route::resource('/tache',TacheController::class);


Route::resource('/assigner',AssignerController::class);

Route::resource('/promotion',PromotionController::class);

Route::resource('/apprenant',ApprenantController::class);



Route::get('search',[searchController::class,'search']);
Route::get('searchBrief',[searchController::class,'searchBreif']);
Route::get('searchApp',[searchController::class,'searchApp']);




Route::get('/assigner',[AssignerController::class,'addAll'])->name('assigner.addAll');

