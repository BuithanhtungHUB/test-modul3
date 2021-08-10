<?php

use App\Http\Controllers\AgencyController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[AgencyController::class,'index'])->name('agency.list');
Route::get('/create',[AgencyController::class,'create'])->name('agency.create');
Route::post('/create',[AgencyController::class,'store'])->name('agency.store');
Route::get('/update/{id}',[AgencyController::class,'edit'])->name('agency.edit');
Route::post('/update/{id}',[AgencyController::class,'update'])->name('agency.update');
Route::get('/delete/{id}',[AgencyController::class,'destroy'])->name('agency.delete');
Route::get('/search',[AgencyController::class,'search'])->name('agency.search');
