<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgeController;
use App\Http\Middleware\AgeValid;
use App\Http\Controllers\BasicTasks;

use App\Http\Controllers\DataController;
use App\Http\Controllers\Todotask;

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

//Optional parameters
Route::get('/skills/{product?}', function ($product='skill not found') {
    return 'Skills '.$product;
});

// Required parameters and Regex

Route::get('/skills/{id}', function ($id) {
    return 'Skills '.$id;
})->where('id','[0-9]');
Route::get('/age/{age}', [AgeController::class, 'index'])->middleware(AgeValid::class);
Route::resource('basic', BasicTasks::class);

Route::get('/list',[DataController::class,'formdata']);
Route::post('result',[DataController::class,'sessionfn'])->name('datainfo');
Route::get('datainfo',[DataController::class,'datafn']);
Route::get('retrived',[DataController::class,'retrivefn'])->name('retrived');
Route::get('retrivedata1',[DataController::class,'retrivefn'])->name('retriveddata');

//Task route
Route::get('/task',[Todotask::class, 'index'])->name('task');
Route::get('/task/create',[Todotask::class, 'create'])->name('taskCreate');
Route::post('/task/store',[Todotask::class, 'store'])->name('taskStore');
Route::get('/task/edit',[Todotask::class, 'edit'])->name('taskEdit');
Route::get('/task/update',[Todotask::class, 'update'])->name('taskUpdate');
